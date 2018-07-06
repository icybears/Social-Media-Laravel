<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Room;

class PostsController extends Controller
{

    public function store ($room_id) 
    {
        $this->validate(request(), [
            'body' => 'required|min:1'
        ]);

        Post::create([
            'body' => trim(request('body')),
            'user_id' => auth()->id(),
            'room_id' => $room_id
        ]);

        return redirect("/room/$room_id");
    }

    public function update(Room $room, Post $post)
    {
        $this->validate(request(),
        ['body' => 'required|min:2']);

       

        $post->body = trim(request('body'));

        $post->save();


            return back();
    }

    public function destroy (Room $room, Post $post)
    {
        $post->deleteComments();

        Post::destroy($post->id);

        return redirect()->back();
    }
}

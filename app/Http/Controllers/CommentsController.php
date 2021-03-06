<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Comment;
use App\Post;
use App\Room;

class CommentsController extends Controller
{

    public function __contruct()
    {
        $this->middleware('auth');
    }

    public function store (Room $room, Post $post)
    {
        $this->validate(request(),[
            'body' => 'required'
        ]);

       $comment = Comment::create([
            'body' => request('body'),
            'user_id' => auth()->id(),
            'post_id' => $post->id
        ]);



        $comment->user->incrementCommentsCount();
        $comment->post->incrementCommentsCount();

        return back();

    }

    public function update(Room $room, Post $post, Comment $comment)
    {
        $this->validate(request(),
        ['body' => 'required|min:2']);

        $comment->body = trim(request('body'));
        $comment->save();
      
        return back();
    }

    public function destroy(Room $room,Post $post, Comment $comment){

        $comment->user->decrementCommentsCount();
        $comment->post->decrementCommentsCount();

       
        Comment::destroy($comment->id);



        return redirect()->back();
    }
}

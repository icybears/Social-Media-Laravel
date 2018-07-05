<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','room_id','bio','interests','location'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function room ()
    {
        return $this->hasOne(Room::class);
    }

    public function posts ()
    {
        return $this->hasMany(Post::class);
    }
   
    public function getImage()
    {
        if( ! $this->image){
            return;
        }
        //  Storage::url($this->image));
        return Storage::url('users_profile_image/' . $this->image);
    }
}

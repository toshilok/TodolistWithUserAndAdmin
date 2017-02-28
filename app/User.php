<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     public function isAdmin()
   {
       return $this->admin; // this looks for an admin column in your users table
   }
    protected $fillable = [
        'firstname', 'lastname', 'password', 'username', 'birthday', 'gender','avatars',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function todolist(){

      return $this->hasMany(Todolist::class);

    }
}

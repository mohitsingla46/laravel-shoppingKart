<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'password', 'profile_image'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getProfileImageAttribute($value){
        if($value == null){
            return asset("images/dummy.png");
        }
        else{
            return asset("storage/".$value);
        }
    }
}

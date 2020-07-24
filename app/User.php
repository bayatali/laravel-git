<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use PharIo\Version\GreaterThanOrEqualToVersionConstraint;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function post()
    {
     return   $this->hasOne(Post::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);

    }

    public function roles()
    {
      return  $this->belongsToMany(Role::class)->withPivot('created_at','updated_at');
    }

    public function photos()
    {
      return  $this->morphMany(photo::class,'imageable');
    }

    public function isAdmin($newRole)
    {

        foreach ($this->roles as $role) {

            if ($role->name == $newRole){
                return true;
            }

       }
        return  false;
    }
}

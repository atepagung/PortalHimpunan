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
    protected $fillable = [
        'username', 'email', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment', 'user_id');
    }

    public function major()
    {
        return $this->hasOne('App\Community');
    }

    public function majors()
    {
        return $this->belongsToMany('App\Major', 'community_user');
    }

    public function pictures()
    {
        return $this->morphMany('App\Picture', 'picturable');
    }

    public function posts()
    {
        return $this->hasMany('App\Post', 'user_id');
    }

    public function reports()
    {
        return $this->morphMany('App\Report', 'reportable');
    }

    public function report()
    {
        return $this->hasMany('App\Report', 'user_id');
    }

    public function schedules()
    {
        return $this->hasMany('App\Schedule', 'user_id');
    }

    public function task()
    {
        return $this->hasMany('App\Task', 'user_id');
    }

    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id');
    }

}

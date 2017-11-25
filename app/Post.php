<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $table = 'posts';
	protected $fillable = ['title', 'body', 'post_type_id', 'visibility', 'user_id', 'status'];

    public function comments()
    {
    	return $this->hasMany('App\Comment', 'post_id');
    }

    public function pictures()
    {
        return $this->morphMany('App\Picture', 'picturable');
    }

    public function post_type()
    {
    	return $this->belongsTo('App\Post_Type', 'post_type_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function reports()
    {
        return $this->morphMany('App\Report', 'reportable');
    }
}

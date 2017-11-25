<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = ['body', 'post_id', 'user_id', 'status'];

    public function post()
    {
    	return $this->belongsTo('App\Post', 'post_id');
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

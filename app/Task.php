<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
	protected $fillable = ['title', 'body', 'class_id', 'user_id'];

    public function reports()
    {
        return $this->morphMany('App\Report', 'reportable');
    }

    public function class()
    {
    	return $this->belongsTo('App\Class', 'class_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}

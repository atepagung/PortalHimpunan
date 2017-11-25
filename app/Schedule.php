<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';
	protected $fillable = ['user_id', 'class_id', 'status'];

    public function reports()
    {
        return $this->morphMany('App\Report', 'reportable');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function class()
    {
    	return $this->belongsTo('App\Class', 'class_id');
    }
}

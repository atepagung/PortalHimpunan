<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{

	protected $table = 'classes';

    protected $fillable = ['title', 'period', 'term', 'location', 'major_id'];

    public function major()
    {
    	return $this->belongsTo('App\Major', 'major_id');
    }

    public function reports()
    {
        return $this->morphMany('App\Report', 'reportable');
    }

    public function schedules()
    {
        return $this->hasMany('App\Schedule', 'class_id');
    }

    public function task()
    {
        return $this->hasMany('App\Task', 'class_id');
    }
}

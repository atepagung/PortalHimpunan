<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $table = 'majors';

    protected $fillable = ['name', 'major_id', 'user_id'];

    public function classes()
    {
    	return $this->hasMany('App\Class', 'major_id');
    }

    public function community()
    {
    	return $this->hasOne('App\Community', 'major_id');
    }

    public function university()
    {
    	return $this->belongsTo('App\University', 'university_id');
    }

    public function major_category()
    {
    	return $this->hasOne('App\Major_Category', 'major_category_id');
    }

    public function reports()
    {
        return $this->morphMany('App\Report', 'reportable');
    }
}

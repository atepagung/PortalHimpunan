<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $table = 'universities';
    protected $fillable = ['code', 'name', 'location', 'town'];

    public function majors()
    {
    	return $this->hasMany('App\Major', 'university_id');
    }

    public function pictures()
    {
        return $this->morphMany('App\Picture', 'picturable');
    }

    public function reports()
    {
        return $this->morphMany('App\Report', 'reportable');
    }
}

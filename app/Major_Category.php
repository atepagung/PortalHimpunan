<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major_Category extends Model
{
    
	protected $table = 'major_category';

    protected $fillable = ['title'];

    public function majors()
    {
    	return $this->hasMany('App\Major', 'major_category_id');
    }

    public function reports()
    {
        return $this->morphMany('App\Report', 'reportable');
    }
}

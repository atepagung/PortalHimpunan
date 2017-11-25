<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_Type extends Model
{
    
    protected $table = 'post_type';
	protected $fillable = ['title'];

    public function posts()
    {
    	return $this->hasMany('App\Post', 'post_type_id');
    }

    public function reports()
    {
        return $this->morphMany('App\Report', 'reportable');
    }
}

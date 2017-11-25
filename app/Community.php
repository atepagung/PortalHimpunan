<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $table = 'communities';

    protected $fillable = ['name', 'major_id', 'user_id', 'status'];

    public function major()
    {
    	return $this->hasOne('App\Major');
    }

    public function user()
    {
    	return $this->hasOne('App\User');
    }

    public function users()
    {
    	return $this->belongsToMany('App\User', 'community_user');
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

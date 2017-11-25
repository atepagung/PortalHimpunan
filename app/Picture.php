<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $table = 'pictures';
	protected $fillable = ['link', 'user_id', 'picturable_id', 'picturable_type'];
    

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function picturable()
    {
    	return $this->morphTo();
    }

    public function reports()
    {
        return $this->morphMany('App\Report', 'reportable');
    }
}

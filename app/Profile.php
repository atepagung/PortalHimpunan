<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = ['user_id', 'npm', 'firstname', 'surname', 'JK', 'date_of_birth', 'address', 'phone', 'pp', 'about_me',];

    public function user()
    {
    	return $this->hasOne('App\User', 'user_id');
    }

}

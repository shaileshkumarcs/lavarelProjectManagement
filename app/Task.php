<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
     protected $fillable = [
    	'name',
    	'description',
    	'project_id',
    	'user_id',
    	'days',
    	'hours',
    	'company_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function projects(){
        return $this->belongsTo('App\Project');
    }

    public function company(){
        return $this->belongsTo('App\Company');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }
}

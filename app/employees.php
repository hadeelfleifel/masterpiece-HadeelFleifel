<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    public function roles()
    {
        return $this->belongsTo('App\roles','foreign_key');
    }
    public function classes()
    {
        return $this->hasMany('App\classes');
    }     
    public function subjects()
    {
        return $this->hasMany('App\subjects');
    }     
    

 }

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    //
    public function employees()
    {
        return $this->belongsTo('App\employees','foreign_key');
    }
    public function schedules()
    {
        return $this->hasOne('App\schedules');
    }     
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    //
    public function employees()
    {
        return $this->hasMany('App\employees');
    }     

}

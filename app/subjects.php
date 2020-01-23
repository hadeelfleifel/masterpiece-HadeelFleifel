<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subjects extends Model
{
    //
    public function employees()
    {
        return $this->belongsTo('App\employees','foreign_key');
    }
}

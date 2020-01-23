<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedules extends Model
{
    //
    public function classes()
    {
        return $this->belongsTo('App\classes','foreign_key');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gebruiker extends Model
{



    public function statuses(){
        return $this->belongsToMany('App\Status');
    }

}

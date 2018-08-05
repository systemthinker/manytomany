<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{


    public function gebruikers(){
        return $this->belongsToMany('App\Gebruiker');
    }


}

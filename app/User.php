<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function posts(){
        return $this->belongsToMany('App\Post');
    }

    public function roles(){
        return $this->belongsToMany('App\Role');
//        return $this->belongsToMany('App\Role','pivotTableName','key_id','key2_id');
    }




}

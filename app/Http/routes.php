<?php
use App\User;
use App\Post;
use App\Role;
use App\Test;
use App\Status;
use App\Gebruiker;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/posts', 'PostController');

Route::get('/gebruiker/{id}/statuses',function($id){


    $gebruiker =  Gebruiker::findOrFail($id);
    foreach($gebruiker->statuses as $statuses){
        echo $statuses->status;
    }

});
<?php

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

require "admin_routes.php";
require "web_routes.php";

// Route::get('/', function () {
//     return view('welcome');
// });

Route::auth();



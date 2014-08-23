<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', "ViewController@home");
// This is another comment
Route::get('/announcements', 'ViewController@announcements');

Route::get('/ranked', 'ViewController@ranked');

Route::get('/calendar', 'ViewController@calendar');

Route::get('/community/ranked-team', 'ViewController@rankedTeam');

Route::get('/community/tryouts', 'ViewController@tryouts');

Route::get('/community/streamers', 'ViewController@streamers');

Route::get('/community/teamspeak', 'ViewController@teamspeak');

Route::get('/ourstaff', 'ViewController@ourStaff');

Route::get('/donations', 'ViewController@donations');

// REST controller

Route::controller('rest', 'RestController');

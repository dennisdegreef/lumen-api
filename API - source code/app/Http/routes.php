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

// Routes for the soldiers.
$app->get('/soldiers/all', 'App\Http\Controllers\apiSoldiers@Soldiers');
$app->get('/soldiers/{id}', 'App\Http\Controllers\apiSoldiers@Soldier');

// Routes for graveyards?.
$app->get('/graveyards/all', 'App\Http\Controllers\apiBegraafplaatsen@Graveyards');

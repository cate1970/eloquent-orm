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
use App\User;

Route::get('/create', function () {
	$user = User::create(['name' =>'Salvadore Teran', 
		'email' => 'carlos.teran@gmail.com', 
		'Password' => bcrypt('123456'),
		'gender' => 'm',
		'biography' => 'Profesor en Programación'
		]
		);
	return 'usuario guardado';
});


Route::get('/update-user', function () {
	$user = User::find(1);
	$user->gender = 'm';
	$user->biography= 'Profesor de PHP';
	$user->save();
	return 'usuario actualizado';

});

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
use Faker\Factory as Faker;

Route::get('/', 'PagesController@home');

Route::get('/all', 'QueryController@eloquentAll');

Route::get('/get/{gender}', 'QueryController@eloquentGet');

Route::get('/get-custom', 'QueryController@eloquentGetCustom');

Route::get('delete/{id}', 'QueryController@eloquentDelete');

Route::get('lists', 'QueryController@eloquentLists');

Route::get('first-last', 'QueryController@eloquentFirstLast');

Route::get('paginate', 'QueryController@eloquentPaginate');

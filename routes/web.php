<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('create_team', 'CreateTeamController@index');
Route::get('/', [
    'uses' => 'HomeController@index',
    'as'   => 'home',
]);
Route::get('/login', [
    'uses' => 'UserController@getLoginForm',
    'as'   => 'login',
]);
Route::post('/login', [
    'uses' => 'UserController@login',
    'as'   => 'login',
]);

Route::get('/registration', [
    'uses' => 'UserController@getRegistrationForm',
    'as'   => 'registration',
]);
Route::post('/registration', [
    'uses' => 'UserController@registration',
    'as'   => 'registration',
]);
Route::get('/profile' ,[
   'uses' => 'UserProfileController@index',
   'as'  =>  'profile'
]);
Route::get('/logout',[
    'uses' => 'UserController@logout',
    'as'  =>  'logout'
]);
Route::get('tournament', function(){
	return view('createTournament');
});
Route::post('insertTournament', 'CreateTournamentController@insert_createTournament');
Route::get(' /{TiD}', 'HomeController@getTour');






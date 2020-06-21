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

Route::get('/','PageController@index')->name('index');
Route::resource('requirement', 'RequirementController');
Route::resource('department', 'DepartementController');
Route::resource('company','CompanyController');
Route::resource('objective','CategoryController');
Route::resource('task','TaskController');
Route::resource('governance','GovernanceController');
Route::resource('concept','ConceptController');
Route::resource('itil','ItilController');
Route::resource('process','ProcessController');
Route::resource('subprocess','SubProcessController');
Route::resource('update','UpdateController');
Route::resource('event','EventController');
Route::resource('function','SubrequirementController');





Route::get('/chart','PageController@chart');
Route::get('/chess','PageController@chess');
Route::get('/overview','PageController@overview');
Route::get('/gant','PageController@gant')->name('gant');;

Route::get('/hoq','PageController@hoq')->name('hoq');

Route::post('company/add','CompanyController@upload')->name('company.add');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bay', 'PageController@bayesian');
Route::get('/pert','PageController@pert'); 
Route::get('/ms', 'MsdashController@welcome');
Route::get('/signin', 'AuthController@signin');
Route::get('/callback', 'AuthController@callback');

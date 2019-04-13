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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


//freelancer
Route::get('/freelancer','FreelancerController@index');
Route::get('/cat/{id}','FreelancerController@cat'); 
Route::get('/subcat/ajax/{subID}','FreelancerController@skillajax');
Route::resource('/fimage','FprofileController');
Route::any('/fskills','FprofileController@skills');



//employer
Route::get('/employer','EmployerController@index');
Route::any('/ptask','EmployerController@task');
Route::any('/managetask','EmployerController@managetask');
Route::get('/blocktask/{id}','EmployerController@blocktask');
Route::resource('/posttask','TaskController');

Route::get('/cat/{id}','EmployerController@cat'); 
Route::get('/subcat/ajax/{subID}','EmployerController@skillajax');

//admin
Route::get('/admin','AdminController@index');
Route::get('/state','AdminController@state');

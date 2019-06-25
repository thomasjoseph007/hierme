<?php
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\FreelancerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidController;
use App\Http\Controllers\AdminController;

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
Route::get('/home', function () {
    if (Auth::user()->utype == 'admin') {
        return redirect('/admin');
    } else if (Auth::user()->utype == "freelancer") {
        return redirect('/freelancer');
    } else if (Auth::user()->utype == "employer") {
        return redirect('/employer');
    }
});


Auth::routes(['verify' => true]);


//freelancer
Route::get('/freelancer','FreelancerController@index');
Route::any('/search','FreelancerController@search');
Route::any('/task_search','FreelancerController@task_search');
Route::get('/cat/{id}','FreelancerController@cat'); 
Route::get('/subcat/ajax/{subID}','FreelancerController@skillajax');
Route::resource('/fimage','FprofileController');
Route::any('/fskills','FprofileController@skills');
Route::any('/more/{id}','FreelancerController@more_info');
Route::any('/bid','BidController@bid');
Route::any('/post','PostController@post');
Route::any('/upost','PostController@upload');
Route::any('/mpost','PostController@view_post');
Route::any('/applied','BidController@views');
Route::any('/bid_delete/{id}{tid}','BidController@fmanage_bids');
Route::any('/edit_fbid/{tid}','BidController@edit_bid');
Route::any('/edit_bids','BidController@edit_bids');
Route::any('/approvedbids','BidController@fapproved_bids');
Route::any('/bid_confirm/{id}{tid}','BidController@cofirm_page');
Route::any('/bid_acepted/{tid}','BidController@confirmed_bid');
Route::any('/discard/{tid}','BidController@discard_bid');


//employer
Route::get('/employer','EmployerController@index');
Route::any('/ptask','EmployerController@task');
Route::any('/managetask','EmployerController@managetask');
Route::get('/blocktask/{id}','EmployerController@blocktask');
Route::resource('/posttask','TaskController');
Route::any('/bids','BidController@bidinfo');
Route::any('/compare','BidController@bid_compare');
Route::any('/back','BidController@bid_rating');
Route::any('/request/{id}{tid}','BidController@request');
Route::any('/bidaproved','BidController@bid_rating');
Route::any('/rate','BidController@rating');
Route::any('/delete/{id}{tid}','BidController@delete');

Route::any('/compare1/{compare}','BidController@compare1');
Route::any('/compare2/{compare}','BidController@compare2');
Route::get('/cat/{id}','EmployerController@cat'); 
Route::get('/subcat/ajax/{subID}','EmployerController@skillajax');

//admin
Route::get('/admin','AdminController@index');
Route::any('/blockuser/{id}','AdminController@block');


Route::post('/chat','ChatController@sendMessage');
Route::get('/chat','ChatController@chatPage');
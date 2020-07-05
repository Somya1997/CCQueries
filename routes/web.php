<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('complaints', 'StudentMnnitController');
Route::get('dashboard','PagesController@getDashboard');
Route::get('/','PagesController@getIndex');
Route::get('assigned','PagesController@getAssignedDashboard');
Route::get('review','PagesController@getReviewDashboard');
Route::get('closed','PagesController@getClosedDashboard');
Route::get('actionedit/{id}', 'PagesController@actionedit');
Route::get('pending','PagesController@getPending');
Route::get('staffassigned/{id}/{staff_name}','PagesController@staffassigned');
Auth::routes();

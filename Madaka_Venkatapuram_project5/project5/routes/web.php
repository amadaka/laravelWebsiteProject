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

Route::view('/','home');

Route::view('home','home');
Route::view('new','new');

Route::get('organiser','eventController@index');
Route::get('participant','userEventController@index');
Route::get('adminContact','contactsController@index');
Route::get('logout','logoutController@destroy');



Route::get('delevent/{eventId}','eventController@destroy');

Route::get('delcon/{contId}','contactsController@destroy');

Route::get('odetail/{eventId}','eventController@show');

Route::get('Parti/{eventId}','viewingController@index');

Route::get('edit/{eventId}','eventController@edit');


Route::get('view2ing/{eventID}','viewingController@index');

Route::get('attending','participantController@index');

Route::get('joinevent/{eventId}/{userId}','participantController@store');

Route::get('leaveevent/{partiId}','participantController@destroy');

Route::get('leaveidevent/{partiId}/{eventId}','viewingController@destroy');

Route::view('contactus','contactus');

Route::view('mission','mission');


Route::view('team', 'team');

Route::post('contactus','contactsController@store');
Route::post('new1','eventController@store');
Route::post('hell2','eventController@update');

Route::post('home2','homeContactController@store');

Route::post('home','registerControler@store');
Route::post('home3','loginControler@show');

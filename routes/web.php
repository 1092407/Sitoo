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

/*Route::get('/', function () {
    return view('welcome');
});
*/


// ROTTE PUBBLICHE

Route::view('/Chi','chisiamo')->name('chi');  // per la vista chi siamo
Route::view('/Dove','dovesiamo')->name('dove');  // per la vista dove siamo
Route::view('/Cosa','cosa')->name('cosa');  // per la vista informazioni sul servizio offerto
Route::view('/Privacy','privacy_cookies')->name('privacy'); // per la vista sulle info relative alla privacy
Route::view('/Regolamento','termini_condizioni')->name('termini_condizioni'); // per la vista relativa ai termini di condizioni

Route::get('/', 'PublicController@showHomepage')->name('home'); // per aprire home page



//Sottoinsime di Auth::routes()
Route::get('login','Auth\LoginController@showLoginForm')->name('login')->middleware('guest'); //Rotta che genera la form GET
Route::post('login','Auth\LoginController@login');//Usata al submit della form che attiva il processo di autenticazione
Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register')->middleware('guest');//Rotta che genera la form di registrazione
Route::post('register','Auth\RegisterController@register'); //Rotta che effettivamente registra l'utente

//Auth::routes();   // rotte con ui e auth

 // Route::get('/home', 'HomeController@index')->name('home'); // rotta ottenuta con auth di ui

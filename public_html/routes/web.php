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
    App::setLocale('nl');

    return view('welcome');
});

Route::get('/en', function () {
    App::setLocale('en');

    return view('welcome');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('tips', function () { return view('tips'); });

Route::get("aanmelden", "aanmeldingen@index");
Route::post("store", "aanmeldingen@store");
Route::get("success", "aanmeldingen@success");

Route::get("print/ticket", "aanmeldingen@printticket");

Route::get("testmail", "aanmeldingen@testmail");

Route::get('test', 'aanmeldingen@test', function () { App::setLocale('nl'); });

Route::get('/test/{locale}', 'aanmeldingen@test', function ($locale) { App::setLocale($locale); });

Route::get("home/aanmeldingen", "viewsignups@index");

Route::get("/check/email", "CheckController@emailcheck");
Route::get("/check/id", "CheckController@idcheck");
Route::get("enter", "CheckController@enter");

Route::get("/signups", "SignupsController@index");

Route::get("/statistics", "SignupsController@stats");

Route::get("/api/signups", "SignupsController@getBasicData");

Route::get("/staff", "StaffController@index");
Route::get("/staff/create", "StaffController@create");
Route::post("/staff/store", "StaffController@store");

Route::get("/profile", "ProfileController@index");
Route::post("/profile/update", "ProfileController@update");

Route::get("/settings", "SettingsController@index");
Route::post("/settings/production", "SettingsController@ProductionUpdate");
Route::get("/settings/njgroups", "SettingsController@NjgroupUpdate");
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route :: get('/','TemplateController@index');
Route :: get('about-us','TemplateController@aboutus');
Route :: get('help','TemplateController@help');
Route :: get('contact-us','TemplateController@contactus');
Route :: get('login','TemplateController@login');
Route :: get('signup','TemplateController@signup');
Route :: get('policy','TemplateController@policy');
Route :: get('terms','TemplateController@terms');
Route :: get('fees','TemplateController@fees');
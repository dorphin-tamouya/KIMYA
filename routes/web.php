<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PaymentController;

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

Route::prefix('transfert')->middleware('auth')->group(function () {
    Route::post('send', [PaymentController::class, 'send'])->name('send-money');
    Route::post('confirm', [PaymentController::class, 'checkSend'])->name('confirm-money');
});

Route :: get('/','TemplateController@index');
Route :: get('about-us','TemplateController@aboutus');
Route :: get('help','TemplateController@help');
Route :: get('contact-us','TemplateController@contactus');
Route :: get('login','TemplateController@login');
Route :: get('signup','TemplateController@signup');
Route :: get('policy','TemplateController@policy');
Route :: get('terms','TemplateController@terms');
Route :: get('fees','TemplateController@fees');
Route :: get('sendconfirm','TemplateController@sendconfirm');
Route :: get('sendsuccess','TemplateController@sendsuccess');
Route :: get('dashboard','TemplateController@dashboard');
Route :: get('profile','TemplateController@profile');
Route :: get('security','TemplateController@security');
Route :: get('paymentmethods','TemplateController@paymentmethods');



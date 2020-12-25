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

Route::get('/', 'PageController@index')->name('enurse.index');
Route::get('/circular', 'PageController@circular')->name('enurse.circular');
Route::get('/contact','PageController@contact')->name('eVendor.contact');
Route::get('/about','PageController@about')->name('eVendor.about');
Route::get('/nurse-dashboard/{id}','PageController@nurseProfile')->name('eVendor.nurse_dashboard')->middleware('auth');
Route::get('/nurse/hired/{id}','HomeController@nurseHire')->name('nurse.hired');
Route::get('/nurse/user-request/{id}', 'HomeController@userNurseRequest')->name('user_nurse_request');
Route::get('/nurse/user-request-accept/{id}', 'HomeController@userRequestAccept')->name('nurse_request_accept');


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Confirm Password (added in v6.2)
Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Email Verification Routes...
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify'); // v6.x
/* Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify'); // v5.x */
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
// Auth::routes();
Route::get('/user', 'HomeController@index')->name('user.index');

// Admin Panel
Route::middleware(['auth'])->group(function () {
    Route::get('/approval-pending','admin\RequestController@approvalPending')->name('approval');
    Route::middleware(['approved'])->group(function (){
        Route::get('/approved-request','admin\RequestController@approved')->name('approved');
    });
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/dashboard','admin\RequestController@index')->name('admin');
        Route::get('/admin/nurse-request-list', 'admin\RequestController@nurseRequestList')->name('nurse_request');
        Route::get('/admin/user-request-list', 'admin\RequestController@userRequestList')->name('user_request');
        Route::get('/admin/request-approved/{id}', 'admin\RequestController@adminRequestApprove')->name('request.approve');
    });
});
Route::get('/admin/login', function () { return view('admin.auth.login'); });
Route::post('/admin/login', 'admin\auth\LoginController@login')->name('admin.login');
Route::post('/admin/logout', 'admin\auth\LoginController@logout')->name('admin.logout');
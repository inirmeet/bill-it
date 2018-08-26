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
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {


  Route::group(['namespace' => 'AdminAuth'], function()
  {
    // Authentication Routes...
    $this->get('/', 'LoginController@showLoginForm')->name('admin.login');
    $this->post('login', 'LoginController@login');
    $this->get('logout', 'LoginController@logout')->name('admin.logout');

    // // Registration Routes...
    // $this->get('register', 'RegisterController@showRegistrationForm')->name('admin.register');
    // $this->post('register', 'RegisterController@register');
    //
    // // Password Reset Routes...
    // $this->get('password/reset', 'ForgotPasswordController@showLinkRequestForm');
    // $this->post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
    // $this->get('password/reset/{token}', 'ResetPasswordController@showResetForm');
    // $this->post('password/reset', 'ResetPasswordController@reset');
  });

  Route::middleware(['admin'])->group(function () {
    $this->get('/dashboard', 'AdminHomeController@index')->name('admin.dashboard');

  });
});

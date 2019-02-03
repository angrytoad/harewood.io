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

$this->get('/', function () {
    return view('welcome');
})->name('welcome');

// Authentication Routes...
$this->get('secret', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('secret', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// $this->get('register', 'Auth\AuthController@showRegistrationForm');
// $this->post('register', 'Auth\AuthController@register');

// Password Reset Routes...
// $this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
// $this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
// $this->post('password/reset', 'Auth\PasswordController@reset');


$this->group(['middleware' => ['auth'],'prefix' => 'admin'], function() {
    $this->get('/', 'Admin\AdminController@index')->name('admin');
    $this->get('/contact-form-submissions', 'Admin\ContactFormSubmissionsController@show')->name('admin.contact-form-submissions');
});


$this->get('/get-in-touch', 'GetInTouchController@show')->name('get-in-touch');
$this->post('/get-in-touch', 'GetInTouchController@post');

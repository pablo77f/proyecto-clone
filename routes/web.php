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
use App\Funcion;
use App\Http\Controllers;

Route::get('/', 'PageController@index');
Route::get('/mail', 'PageController@mail');
Route::post('/form', 'PageController@form');

Route::get('/admin', function () {
    return view('layout_admin');
})->middleware('auth');

Route::get('/phpinfo', function () {
    return phpinfo();
})->middleware('auth');

Route::get('admin/staff', 'StaffController@index')->middleware('auth');
Route::post('admin/staff', 'StaffController@store')->middleware('auth');
Route::post('admin/staff/{id_persona}', 'StaffController@store')->where('id_persona','[0-9]+')->middleware('auth');
Route::get('admin/staff/alta', 'StaffController@create')->middleware('auth');
Route::get('admin/staff/{id_persona}', 'StaffController@edit')->where('id_persona','[0-9]+')->middleware('auth');
Route::delete('admin/staff/{id_persona}', 'StaffController@delete')->where('id_persona','[0-9]+')->middleware('auth');

Route::get('admin/proyecto', 'ProyectoController@index')->middleware('auth');
Route::post('admin/proyecto', 'ProyectoController@store')->middleware('auth');
Route::post('admin/proyecto/{id_proyecto}', 'ProyectoController@store')->where('id_proyecto','[0-9]+')->middleware('auth');
Route::get('admin/proyecto/alta', 'ProyectoController@create')->middleware('auth');
Route::get('admin/proyecto/{id_proyecto}', 'ProyectoController@edit')->where('id_proyecto','[0-9]+')->middleware('auth');
Route::delete('admin/proyecto/{id_proyecto}', 'ProyectoController@delete')->where('id_proyecto','[0-9]+')->middleware('auth');

Route::get('admin/noticia', 'NoticiaController@index')->middleware('auth');
Route::post('admin/noticia', 'NoticiaController@store')->middleware('auth');
Route::post('admin/noticia/{id_noticia}', 'NoticiaController@store')->where('id_noticia','[0-9]+')->middleware('auth');
Route::get('admin/noticia/alta', 'NoticiaController@create')->middleware('auth');
Route::get('admin/noticia/{id_noticia}', 'NoticiaController@edit')->where('id_noticia','[0-9]+')->middleware('auth');
Route::delete('admin/noticia/{id_noticia}', 'NoticiaController@delete')->where('id_noticia','[0-9]+')->middleware('auth');


//Auth::routes();
Route::get('admin/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login');

// Registration Routes...
Route::get('admin/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('admin/register', 'Auth\RegisterController@register');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

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

Route::get('/', function () {
    return view('home');
});

Route::get('/услуги', function () {

    return view('services');
});

Route::get('/услуги/веб-разработка', function () {
    return view('web-development');
});

Route::get('/услуги/дизайн', function () {
    return view('design');
});

Route::get('/услуги/маркетинг', function () {
    return view('marketing');
});

Route::get('/о-нас', function () {
    return view('about');
});

Route::get('/контакты', function () {
    return view('contacts');
});
Route::get('/laravelPage', function () {
    return view('laravelPage');
});

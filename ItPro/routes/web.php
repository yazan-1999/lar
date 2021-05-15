<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Rorm;




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

/*метод get первое url адресс второе что туда передаем*/ 
/*метод post первое url адресс второе что туда передаем*/ 
/**/
Route::get(
    '/', function () {
    return view('home');
})->name('home');

Route::get(
    '/about', function () {
    return view('about');
})->name('about');

Route::get(
    '/contact', function () {
    return view('contact');
})->name('contact');

// Route::get(
//     '/contact/all{id}',
//     'App\Http\Controllers\ContactController@showOneMesssage'
// )->name('contact-data-one');

// Route::get(
//     '/contact/all{id}/update',
//     'App\Http\Controllers\ContactController@updateMessage'
// )->name('contact-update');

// Route::post(
//     '/contact/all{id}/update',
//     'App\Http\Controllers\ContactController@updateMessageSubmit'
// )->name('contact-update-submit');

// Route::get(
//     '/contact/all{id}/delete',
//     'App\Http\Controllers\ContactController@deleteMessage'
// )->name('contact-delete');

// Route::get('/contact/all', 'App\Http\Controllers\ContactController@allData')->name('contact-data');
// Route::get('/contact', function(){
//     return view('contact');
// });
// Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');
// Route::post('/contact/submit', function(){
//     return Request::all();
// })->name('contact-form');


// Route::get('/contact/submit', 'App\Http\Controllers\Rorm@__invoke');
// Route::get('/contact/submit', Rorm::class);

// Route::get ('/mailContactUs',function(){
//     return view('contactUs.blade.php');
// });

// Route::post('/mailcontactUs',Rorm::class);
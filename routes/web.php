<?php

use Illuminate\Support\Facades\Mail;
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
})->name('home');


Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('service', function () {
    return view('service');
})->name('service');


Route::post('messages', function () {
    // enviar correo
    $data = request()->all();
    Mail::send('emails.message', $data, function($message) use ($data){
        $message->from($data['inputEmail'], $data['inputName'])
                    ->to('lmvf0905@gmail.com', 'Luis M.')
                    ->subject($data['inputSubject']);
    });
    // responder al usuario
    return back()->with('flash', $data['inputName'].', Your message has been received.');
})->name('messages');
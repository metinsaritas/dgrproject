<?php

use function foo\func;

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

Route::get("/asd", function () {
    return "Hellow";
})->name("isim");


Route::get("/hizmetler/bilisim-sistemleri", function() {
    return view("pages.bilisim");
})->name("bilisim");

Route::get("/hizmetler/enerji-sistemleri", function() {
    return view("pages.enerji");
})->name("enerji");

Route::get("/hizmetler/otomasyon-sistemleri", function() {
    return view("pages.otomasyon");
})->name("otomasyon");
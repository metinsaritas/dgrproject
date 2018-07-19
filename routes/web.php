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

Route::get("/hizmetler/bilisim-sistemleri", function() {
    return view("hizmetler.bilisim");
})->name("bilisim");

Route::get("/hizmetler/enerji-sistemleri", function() {
    return view("hizmetler.enerji");
})->name("enerji");

Route::get("/hizmetler/otomasyon-sistemleri", function() {
    return view("hizmetler.otomasyon");
})->name("otomasyon");



Route::get("/iletisim", function() {
    return view("iletisim");
})->name("iletisim");


Route::get("/hakkimizda", function() {
    return view("hakkimizda");
})->name("hakkimizda");

Route::get("/ureticilerimiz", function() {
    return view("ureticilerimiz");
})->name("ureticilerimiz");
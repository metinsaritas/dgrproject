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
})->name("link1");

Route::get("/hizmetler/dijital-donusum", function() {
    return view("hizmetler.dijital");
})->name("link2");

Route::get("/hizmetler/akilli-sehir-sistemleri", function() {
    return view("hizmetler.akillisehir");
})->name("link3");



Route::get("/iletisim", function() {
    return view("iletisim");
})->name("iletisim");


Route::get("/hakkimizda", function() {
    return view("hakkimizda");
})->name("hakkimizda");

Route::get("/ureticilerimiz", function() {
    return view("ureticilerimiz");
})->name("ureticilerimiz");

Route::get('/ureticilerdetay/{id}', function ($id) {
    return view('ureticilerdetay')->with(["id"=> $id]);
});
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

Route::get('chickendishes-detail', function () {
    return view('fin.chickendishes-detail');
});

Route::get('childrenmenu-detail', function () {
    return view('fin.childrenmenu-detail');
});
Route::get('desserts-detail', function () {
    return view('fin.desserts-detail');
});
Route::get('lambdishes-detail', function () {
    return view('fin.lambdishes-detail');
});
Route::get('porkdishes-detail', function () {
    return view('fin.porkdishes-detail');

});
Route::get('salad-detail', function () {
    return view('fin.salad-detail');

});
Route::get('seafood-detail', function () {
    return view('fin.seafood-detail');

});
Route::get('soup-detail', function () {
    return view('fin.soup-detail');

});
Route::get('vegdishes-detail', function () {
    return view('fin.vegdishes-detail');

});
Route::get('tandooridishes-detail', function () {
    return view('fin.tandooridishes-detail');

});
Route::get('dinner', function () {
    return view('fin.dinner');
});

Route::get('contact', function () {
    return view('fin.contact');
});

Route::get('setmenus', function () {
    return view('fin.setmenus');
});
Route::get('booking', function () {
    return view('fin.booking');
});
Route::get('booking', function () {
    return view('fin.booking');
});
Route::get('lunch', function () {
    return view('fin.lunch');
});
Route::get('/', function () {
    return view('home.home');
});

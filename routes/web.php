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


Route::get('/', function() {
    return 'This is Home Page';
});
Route::get('/about', function() {
    return 'This is About Page';
});
Route::get('/contact', function() {
    return 'This is Contact Page';
});
Route::get('/test', function() {
    return view('test', ['name'=>'Dat']);
});
Route::get('/student/{name}', function($name) {
    return 'Tên của tôi là '. $name;
});
Route::get('/user/{name?}', function($name='Dat') {
    return 'Tên của tôi là '. $name;
});
Route::get('/homeController', 'homeController@index');

// Lab2
Route::get('index', function () {
    $xe = ['Exciter 150 phiên bản Monster Energy Yamaha MotoGP', 'Exciter 150 phiên bản Giới hạn', 'Exciter 150 RC phiên bản mới','Sirius phanh cơ'];
    return view('index', ['name'=> 'Tran Dinh Dat', 'day'=>'Thứ 4', 'xe'=>$xe]);
});


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

// Lab3
Route::get('index', function () {
    $xe = ['Exciter 150 phiên bản Monster Energy Yamaha MotoGP', 'Exciter 150 phiên bản Giới hạn', 'Exciter 150 RC phiên bản mới','Sirius phanh cơ'];
    return view('index', ['name'=> 'Tran Dinh Dat', 'day'=>'Thứ 4', 'xe'=>$xe]);
});

// Bài làm thêm lab 3
Route::get('news', function(){
    $news_list = array(
        ['title'=> 'Bài viết số 1', 'content'=>'Nội dung bài viết 1', 'post_date'=>'23/5/2019'],
        ['title'=> 'Bài viết số 2', 'content'=>'Nội dung bài viết 2', 'post_date'=>'22/5/2019'],
        ['title'=> 'Bài viết số 3', 'content'=>'Nội dung bài viết 3', 'post_date'=>'21/5/2019'],
        ['title'=> 'Bài viết số 4', 'content'=>'Nội dung bài viết 4', 'post_date'=>'20/5/2019'],
        ['title'=> 'Bài viết số 5', 'content'=>'Nội dung bài viết 4', 'post_date'=>'20/5/2019'],
    );
    return view('news.index', compact('news_list'));
});


// Bài 5 Validation 
Route::get('validation', 'ValidationController@showform');
Route::post('validation', 'ValidationController@validateform')->name('validateform');

Route::get('register', 'HomeController@registerform');
Route::post('register', 'HomeController@register');

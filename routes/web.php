<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello word!';
});

Route::get('/user/{id}', function ($id) {
    return 'User ID:' .$id; 
});


Route::get('/user/{name?}', function ($name = 'Guest') {
    return 'Hello,' .$name; 
});

Route::get('/profile', function () {
    return 'This is the profile page.'; 
})->name('profile');


Route::get('/redirect-to-profile', function () {
    return redirect()->route('profile'); 
});

Route::get('/user/{name?}', function ($name = 'Guest') {
    return 'Hello,' .$name; 
});

Route::get('/profile', function () {
    return 'This is the profile page.'; 
})->name('profile');


Route::prefix('admin')->group(function(){
Route::get('/dashboard', function () {
    return 'Admin Dashboard'; 
    });

Route::get('/profile', function () {
    return 'Admin profile'; 
    });

});


Route::get('/dashboard', function () {
    return 'Welcome to your dashboard!'; 
})->middleware('auth');


Route::resource('post', 'PostController');


Route::get('/penjumlahan/1/2', function () {
    return '1+2=3';
});


Route::get('/penjumlahan/{angka1}/{angka2}', function ($angka1, $angka2) {
    $hasil = $angka1 + $angka2;
    return 'Hasil Penjumlahan: ' . $hasil;
});
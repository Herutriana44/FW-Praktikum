<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hello');
});

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/hello-world', function () {
    return "<h1>Hello World</h1>";
});

// Route::get('/user/{id}', function($id) {
//     return "Ini user : " . $id;
// });

Route::get('/user/{name?}', function($name = 'Guest') {
    return "Hello, " . $name;
});

Route::get('/profile', function() {
    return "<h1>This is profile page</h1>";
})->name('profile');

Route::get('/redirect-to-profile', function() {
    return redirect()->route('profile');
});

Route::prefix('admin')->group(function() {
    Route::get('/dashboard', function() {
        return 'Admin Dashboard';
    });

    Route::get('/profile', function() {
       return 'Admin Profile'; 
    });
});

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::get('/dashboard', function() {
    return 'Welcome to your Dashboard';
})->middleware('auth');


Route::get('tambah/{n1}/{n2}', function($n1 = 10, $n2 = 11) {
    return $n1 + $n2;
});

Route::resource('posts', 'PostController');
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('about', function() {
    return '<h1>About Page</h1>';
})->name('hello');

Route::get('contact', function () {
    return '<h1>Contact page</h1>';
});

Route::get('contact/{id}', function($id) {
    return $id;
})->name('edit-contact');

// Route::get('home' , function () {
//     return "<a href='".route('edit-contact',1)."'>About</a>";
// });

/** Route Grouping */

// Route::group(['prefix' => 'customer'], function(){
//     Route::get('/' , function() {
//         return "<h1>Customer</h1>";
//     });
//     Route::get('/create' , function() {
//         return "<h1>Customer Create</h1>";
//     });
//     Route::get('/show' , function() {
//         return "<h1>Customer Show</h1>";
//     });
// });

// Route Methods

/**
 * GET - request a resource
 * POST - Create a new resource
 * PUT - Update a resource
 * PATCH - Modify a resource
 * DELETE - Delete a resource
 */

 /** Fallback Route */

/*  Route::fallback(function() {
    return "Route Not Exist!";
 }); */

 
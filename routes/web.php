<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;

Route::get('/', function () {
    return view('home');
});
Route::get('/contactUs', function () {
    return view('contactUs');
});
Route::get('/updateproduct', function () {
    return view('/updateproduct');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/productDetails', function () {
    return view('productDetails');
});
Route::get('/inProcess', function () {
    return view('inProcess');
});
Route::get('/receivedProducts', function () {
    return view('receivedProducts');
});
Route::get('/storeLocation', function () {
    return view('storeLocation');
});
Route::get('/userDashboard', function () {
    return view('userDashboard');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});
Route::get('/CupCakesCategories', function () {
    return view('CupCakesCategories');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/adminDashboard', function () {
    return view('/adminDashboard');
});

Route::get('/manageProducts', function () {
    return view('/manageProducts');
});

Route::get('/addProduct', function () {
    return view('addProduct');
});
Route::get('/Search', function () {
    return view('Search');
});
//////////////////////////
Route::get('/Search', [AdminDashboardController::class,'search'])->name('Search');
////////////////////////

// Admin Side 
Route::get('/manageProducts',[AdminDashboardController::class, 'manageProducts']);

Route::post('/updateproduct/{id}', 'App\Http\Controllers\AdminDashboardController@updateProductInfo', ['id' => '{id}']);

Route::get('/updateproduct/{id}', function($id){
    $selectedproduct = \App\Models\Product::find($id);
    return view('updateproduct', ['selectedproduct'=>$selectedproduct]);
});

// route for product data submission 
Route::post('/addproduct', [AdminDashboardController::class, 'addproducts']);

Route::get('/manageProducts', [AdminDashboardController::class, 'viewProducts']);

Route::get('/deleteProduct/{id}', [AdminDashboardController::class, 'deleteProduct'], ['id' => '{id}']);

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signup', 'App\Http\Controllers\Usercontroller@register');
Route::post('/login','App\Http\Controllers\SessionsController@Logincheck');








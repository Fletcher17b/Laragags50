<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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


// Home page, needs basic UI implemented
/* Route::get('/', function () {
    return view('index');
}); */
Route::get('/', function () {
    return redirect('/listings');
});

Route::get('/home', function () {
    return view('home');
});


//Testing stage, please use the other ones 
Route::get('/test',function() {
    return view('test');

});

//Shows all listings
Route::get('/listings',[ListingController::class,'index']);
//Show Create form 

Route::get('/listings/create',[ListingController::class,'create'])->middleware('auth');

//Store Listings data 
Route::post('/listings',[ListingController::class,'store'])->middleware('auth');

//Post a comment
Route::post('/listings/{listing}/comments', [ListingController::class, 'storeComment'])->middleware('auth');


//Show edit form
Route::get('/listings/{listing}/edit',[ListingController::class,'edit'])->middleware('auth');

//Edit Listing Data 
Route::put('/listings/{listing}',[ListingController::class,'update'])->middleware('auth');

//Manage Listings
Route::get('/listings/manage',[ListingController::class,'manage'])->middleware('auth');

//See Favorite Listings
Route::get('/listings/favorites',[ListingController::class,'favorites'])->middleware('auth');

//Add to Favorites
Route::post('/listings/{listing}/favorite', [ListingController::class, 'addFavorite'])->name('listings.addFavorite')->middleware('auth');

//Remove from favorites
Route::post('/listings/{listing}/unfavorite', [ListingController::class, 'removeFavorite'])->name('listings.removeFavorite')->middleware('auth');

//Delete Listings
Route::delete('/listings/{listing}',[ListingController::class,'destroy'])->middleware('auth');

//Shows 1 listing
Route::get('/listings/{listing}',[ListingController::class,'show']);




//Show Register/Create form 
Route::get('/register',[UserController::class,'create'])->middleware('guest');

//Store/create user 
Route::post('/users',[UserController::class,'store']);

//Logout user 
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

//Show login form
Route::get('/login',[UserController::class,'login'])->name('login');

//Log in user
Route::post('/users/authenticate',[UserController::class,'authenticate']);







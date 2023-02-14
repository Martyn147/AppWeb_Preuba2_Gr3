<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RestauranteVisitantesController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\RestaurantController;

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


Route::resource('restaurante', RestauranteVisitantesController::class,[
  'names' =>  'restaurantes',
  'parameters' => ['restaurantes'=>'restaurante']
]
);

// --------------------------Platos y categorias-------------------------------

Route::resource('platos', PlatoController::class,[
  'names' =>  'platos',
  'parameters' => ['platos'=>'plato']
]
);


Route::resource('categorias', CategoriaController::class,[
  'names' =>  'categorias',
  'parameters' => ['categorias'=>'categoria']
]
);



Route::get('/nav', function () {
    return view('welcome');
});
Route::view('/','pages.home') ->name('inicio');
Route::view('/home','pages.home') ->name('home');
 Route::get('/contact',[ContactController::class,'index'])->name('contact');
 Route::post('/contact',[ContactController::class,'store'])->name('contact.store');
 Route::view('/about','pages.about') ->name('about');
 //Route::view('/restaurants2','pages.restaurants') ->name('restaurants');
 Route::view('/search','pages.search') ->name('search');
 Route::view('/places', 'pages.places')->name('places');
//  Route::view('/categories', 'pages.category')->name('categorias');
//  Route::view('/foots', 'pages.platos')->name('platos');

//----------------------------------------------------------------
  // stars-restaurants.com/register=> Registrar
Route::get('/register',[RegisterController::class,'show']);

  // stars-restaurants.com/register=> Registrar -POST
Route::post('/register', [RegisterController::class,'register']);

//----------------------------------------------------------------
// stars-restaurants.com/login => Logear

Route::get('/login',[LoginController::class,'show'])->name('login');

// stars-restaurants.com/login=> login -POST
Route::post('/login', [LoginController::class,'login']);

//--------------------------Logout---------------------------------

Route::get('/logout', [LogoutController::class,'logout'])->name('logout');


//--------------------------Profile---------------------------------
Route::get('/profile', [ProfileController::class,'show'])->name('profile');
Route::get('/profile/setting', [ProfileController::class,'edit'])->name('setting');
Route::patch('/profile', [ProfileController::class,'update'])->name('profile.update');

//--------------------------Pruebas---------------------------------
Route::resource('restaurants',RestaurantController::class)->name('index','restaurants');
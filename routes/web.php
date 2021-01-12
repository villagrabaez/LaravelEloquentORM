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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function(){
    /**
     * Solucion al problema n+1
     *
     * Utilizando el metodo with y pasando como argumento la relacion
     * soluciona este inconveniente.
     */
    $products = App\Product::with('category')->get();

    return view('products', compact('products'));
});
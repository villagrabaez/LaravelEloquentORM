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
     *
     * Para mejorar aún más el tiempo en el que se realizan las consultas podemos
     * especificar los campos que necesitamos mediante el metodo select()
     */
    $products = App\Product::query()
        ->select(['title', 'slug', 'image', 'description', 'category_id'])
        ->with('category:id,title,slug')

        // Alternativa al la linea anterior en caso de necesitar un query más complejo
        // ->with(['category' => function($query){
        //     $query->select('id', 'title', 'slug');
        // }])

        ->get();

    return view('products', compact('products'));
});
<?php

use Illuminate\Support\Facades\Route;

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

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\LazyCollection;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lazy', function () {

    $collection = LazyCollection::times( 20)
        ->map( function($number){ return $number*3;} )
    ->all();

    dump($collection);

    return "done";
});




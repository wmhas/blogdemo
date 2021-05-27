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

Route::resource('employees', EmployeeController::class);


Route::get('/welcome', function () {

    Debugbar::addMessage('Another message', 'mylabel');

    info('This is some useghgful information.');


    return view('welcome_oe');
});


Route::get('/lazy', function () {

    $collection = LazyCollection::times( 20)
        ->map( function($number){ return $number*3;} )
    ->all();

    dump($collection);

    return "done";
});


Route::get('/tip-one', 'TipController@one');

Route::get('/tip-two', 'TipController@two');

Route::get('/tip-three', 'TipController@three');

Route::get('/tip-four', 'TipController@four');

Route::get('/tip-five', 'TipController@five');




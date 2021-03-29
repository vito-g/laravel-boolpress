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

Route::get('/', function () {
    return view('welcome');
});
//Creao la rotta relativa al metodo Index del Controller 'AuthorController':
// Route::get('/author', 'AuthorController@index');

// Route::resource('/post', 'PostController');
// La stringa, qui sopra, crea tutte le rotte, relative ai vari metodi (ancora vuoti) predisposti nel CRUD (che andrò, all'occorrenza, a definire) e dichiara il path di riferimento: /beers.

//(-1)In alternativa, potrei scrivere:

// Route::resource('/post',postController::class);

// Si sfrutta, così, la proprietà class, molto utile , soprattutto, qualora in fase di digitazione del nome della classe lo si scriva in modo errato. Class, cioè, fa un match tra quello che scrivo e il nome delle classi che Laravel ha in memoria; restituendone eventualmente l'errore.

Route::get('/author', 'PostController@indexAuthor');
Route::get('/post', 'PostController@indexPost');

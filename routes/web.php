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
    return redirect()->route('landing');
});

Route::get('/login', function (){
    $locals = [
        [1, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
        [2, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
        [3, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
        [4, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
        [5, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
    ]; 

return view ('index', ['texto'=>'Usuario no autentificado', 'locals' => $locals]);
});

Route::get('/index', function () {
    $locals = [
        [1, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
        [2, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
        [3, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
        [4, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
        [5, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
    ]; 
    return view('index', ['locals'=>$locals]);
}) ->name('landing');

Route::get('/about', function () {
    return view('about', ['empName' => 'Brewery.es']);
})->name ('about');

Route::get('/contact', function (){
    return view ('contact');
})->name('contact'); 

Route::get('/local/{id}', function ($id) {
    $locals = [
        [1, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
        [2, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
        [3, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
        [4, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
        [5, 'Cervecería Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
    ]; 
    return view('local', ['locals'=>$locals[$id]]);
});
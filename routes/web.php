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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/contatti', function () {
    return view("contacts", [
        "name" => "Tommaso",
        "surname" => "Cavaletti",
        "email" => "cavalettitommaso@gmail.com",
        "adress" => "via Supersegreta, 123"
    ]);
})->name("contacts");

Route::get('/segreti', function () {
    return view("secretinfo", [
        "secret1" => "Ho installato una nuova versione di php manualmente",
        "secret2" => "Ho esteso la versione di default con IGN per ignorarla",
        "secret3" => "Ho selezionato manualmente dove installare composer all'interno della nuova versione di php",
        "secret4" => "Ho aggiunto la nuova versione di php al path manualmente"
    ]);
})->name("secrets");

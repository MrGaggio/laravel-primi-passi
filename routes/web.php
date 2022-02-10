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

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');




Route::get('/', function () {
 

    $array = [

        'links' => [
            'Home', 'Contacts', 'Support', 'Work With Us',
        ],
        'contacts' => [
            'Fabrizio tel 3464453543', 'Mauro tel 23622832982', 'Giovanni ha rotto il telefono'
        ],
        'work' => [
            'Gianna Rais, tel. 343444444'
        ],
        'support' => [
            'info@support.it'
        ]
        
    ];

    return view('home', $array);
});




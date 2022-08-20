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
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/Home', function () {
    return view('Home');
});

Route::get('/Skills', function () {
    return view('Skills');
});

Route::get('/Connect_with_us', function () {
    return view('Connect_with_us');
});

Route::get('/About', function () {
    return view('About');
});




// --------------------------------
// Route::get('/{$slug}', function ($slug) {

//     $dir= file_get_contents(__DIR__. "{$slug}.blade.php");
   
//     return view('Home',[
//         'peag'>=$dir
//     ]);
// });
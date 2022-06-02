<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('index', [
        "title" => "Beranda"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Alifa Oty Salsabilla",
        "email" => "alifaotysalsabillaaa@gmail.com",
        "gambar" => "alifa.jpg",
        "lahir" => "12 Juni 2005",
        "kota"=>"Purwokerto, Banyumas, Jawa Tengah",
        "hp"=>"+62 896 7386 7184",
        "isi"=>"Hello my name is Alifa Oty Salsabilla usually called Alifa.
            I'm at SMK Telkom Purwokerto. There I majored in Software Engineering, 
            which studied various digital technologies. I was born in Purwokerto, June 12th, 
            2005. My hobbies are listening music and reading. Yep, that’s all that I can tell 
            about myself. Thank you."
    ]);
});

// Route::resource('/contacts', ContactController::class);
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::post('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');
    Route::get('/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');

});
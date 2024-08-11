<?php

use App\Http\Controllers\ajarController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\CRUDPhoto;
use App\Http\Controllers\halloController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});

Route::get('/hello', function () {
    return 'hello VSGA';
});

Route::get('/word', function () {
    return 'hello Dunia';

});

Route::get('/about', function () {
    return 'NIM  : 2231750011';

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{name}', function ($name) {
    return 'Nama Saya' . $name;
});

Route::get('/post/{post}/{comment}', function ($post, $comment) {
    return 'Pos ke-' .$post . "Komentar ke-:" . $comment;
});

Route::get('/user{name?}', function ($name=null) {
    return 'Nama Saya'. $name;
});

Route::get('/kodebarang/{jenis?}/{merek?}', function ($jk='k01',$mrk='nokia') {
    return  "kode barang $jk dan nama barang $mrk";
});

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('tampil', function () {
    return view('tampil');
})->name('tampil');

Route::get('/pesandisini', function () {
    return '<h1>Pesan disini</h>';
});
Route::redirect('/contact-us', '/pesandisini');

Route::get('/polinema/dosen' , function(){
return "<h1> daftar nama dosen </h>";
});

Route::get('/polinema/tendik' , function(){
    return "<h1> daftar nama tendik </h>";
});

Route::get('/polinema/jurusan' , function(){
    return "<h1> daftar nama jurusan </h>";
});

Route::prefix('/admin')->group(function () {
Route::get('/dosen', function(){
    echo "<h1>Daftar dosen</h1>";
});
Route::get('/tendik', function(){
    echo "<h1>Daftar tendik</h1>";
    });
Route::get('/jurusan', function(){
    echo "<h1>Daftar jurusan</h1>";
    });
});
Route::fallback(function(){
    return  "maaf,alamat ini tidak ditemukan";
});

Route::get('/daftar-dosen',[ajarController::class, 'daftarPengajar']);
Route::get('/tabel-dosen', [ajarController::class, 'tabelPengajar']);
Route::get('/blog-dosen', [ajarController::class, 'blogPengajar']);

Route::get('/pasar-buah', [pageController::class, 'satu']);
Route::resource('crud',CRUDController::class);

Route::resource('photos', CRUDPhoto::class)->only([
    'index',
    'show'
]);

Route::resource('photos', CRUDPhoto::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);

Route::get('/selamat',function(){
return view('hello',['name'=>'dino']);
});

Route::get('/greeting',[
    WelcomeController::class,
    'greeting'
]);

Route::get('/hellow',[
    halloController::class,
    'hellow'
]);




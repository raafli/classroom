<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\PengumpulanController;
use App\Models\siswa;

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

Route::get('/coba', function () {
    $data = Siswa::all();
    return view('coba', compact('data')) ;
})->middleware('auth');
    Route::get('/', function () {
    return view('welcome') ;
})->middleware('auth');

    Route::group(['middleware' => ['auth', 'hakakses:admin']],function(){
    //siswa
    Route::get('/datasiswa',[SiswaController::class, 'index'])->name('datasiswa');
    Route::get('/tambahsiswa',[SiswaController::class, 'tambahsiswa'])->name('tambahsiswa')->middleware('auth');
    Route::post('/insertsiswa',[SiswaController::class, 'insertsiswa'])->name('insertsiswa')->middleware('auth');
    Route::get('/tampilkandatasiswa/{id}',[SiswaController::class, 'tampilkandatasiswa'])->name('tampilkandatasiswa')->middleware('auth');
    Route::post('/updatedatasiswa/{id}',[SiswaController::class, 'updatedatasiswa'])->name('updatedatasiswa')->middleware('auth');
    Route::get('/deletesiswa/{id}',[SiswaController::class, 'deletesiswa'])->name('deletesiswa')->middleware('auth');
//guru
    Route::get('/dataguru',[GuruController::class, 'index'])->name('dataguru')->middleware('auth');
    Route::get('/tambahguru',[GuruController::class, 'tambahguru'])->name('tambahguru')->middleware('auth');
    Route::post('/insertguru',[GuruController::class, 'insertguru'])->name('insertguru')->middleware('auth');
    Route::get('/tampilkandataguru/{id}',[GuruController::class, 'tampilkandataguru'])->name('tampilkandataguru')->middleware('auth');
    Route::post('/updatedataguru/{id}',[GuruController::class, 'updatedataguru'])->name('updatedataguru')->middleware('auth');
    Route::get('/deleteguru/{id}',[GuruController::class, 'deleteguru'])->name('deleteguru')->middleware('auth');

    //tugas
    Route::get('/datatugas',[TugasController::class, 'index'])->name('datatugas')->middleware('auth');
    Route::get('/tambahtugas',[TugasController::class, 'tambahtugas'])->name('tambahtugas')->middleware('auth');
    Route::post('/inserttugas',[TugasController::class, 'inserttugas'])->name('inserttugas')->middleware('auth');
    Route::get('/tampilkandatatugas/{id}',[TugasController::class, 'tampilkandatatugas'])->name('tampilkandatatugas')->middleware('auth');
    Route::post('/updatedatatugas/{id}',[TugasController::class, 'updatedatatugas'])->name('updatedatatugas')->middleware('auth');
    Route::get('/deletetugas/{id}',[TugasController::class, 'deletetugas'])->name('deletetugas')->middleware('auth');

//mapel
    Route::get('/datamapel',[MapelController::class, 'index'])->name('datamapel')->middleware('auth');
    Route::get('/tambahmapel',[MapelController::class, 'tambahmapel'])->name('tambahmapel')->middleware('auth');
    Route::post('/insertmapel',[MapelController::class, 'insertmapel'])->name('insertmapel')->middleware('auth');
    Route::get('/tampilmapel/{id}',[MapelController::class, 'tampilmapel'])->name('tampilamapel')->middleware('auth');
    Route::post('/updatedatamapel/{id}',[MapelController::class, 'updatedatamapel'])->name('updatedatamapel')->middleware('auth');
    Route::get('/deletemapel/{id}',[MapelController::class, 'deletemapel'])->name('deletemapel')->middleware('auth');



//kelas
    Route::get('/datakelas',[KelasController::class, 'index'])->name('datakelas')->middleware('auth');
    Route::get('/tambahkelas',[KelasController::class, 'tambahkelas'])->name('tambahkelas')->middleware('auth');
    Route::post('/insertkelas',[KelasController::class, 'insertkelas'])->name('insertkelas')->middleware('auth');
    Route::get('/tampilkelas/{id}',[KelasController::class, 'tampilkelas'])->name('tampilakelas')->middleware('auth');
    Route::post('/updatedatakelas/{id}',[KelasController::class, 'updatedatakelas'])->name('updatedatakelas')->middleware('auth');
    Route::get('/deletekelas/{id}',[KelasController::class, 'deletekelas'])->name('deletekelas')->middleware('auth');

});

    Route::group(['middleware' => ['auth', 'hakakses:admin,user']],function(){

    Route::get('/pengumpulan',[PengumpulanController::class, 'index'])->name('pengumpulan')->middleware('auth');
    Route::get('/tpengum',[PengumpulanController::class, 'tpengum'])->name('tpengum')->middleware('auth');
    Route::post('/intpengum',[PengumpulanController::class, 'intpengum'])->name('intpengum')->middleware('auth');
    Route::get('/tlpengum/{id}',[PengumpulanController::class, 'tlpengum'])->name('tlpengum')->middleware('auth');
    Route::post('/uppengum/{id}',[PengumpulanController::class, 'uppengum'])->name('uppengum')->middleware('auth');
    Route::get('/delpengum/{id}',[PengumpulanController::class, 'delpengum'])->name('delpengum')->middleware('auth');

});


//login
Route::get('/login',[LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

//log out
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

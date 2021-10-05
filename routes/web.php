<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\bencanacontroller;
use App\Http\Controllers\detail_korbancontroller;
use App\Http\Controllers\kategori_bencanacontroller;
use App\Http\Controllers\kecamatancontroller;
use App\Http\Controllers\kotacontroller;
use App\Http\Controllers\pelaporancontroller;
use App\Http\Controllers\provinsicontroller;
use App\Http\Controllers\rolecontroller;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\usercontrolleer;
use app\Models\sosial;

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
    return view('pwbf');
});

Route::get('/c', function () {
    return view('welcome');
});

//Route::get('/sosial','SosialController@Index');
//Route::get('/sosial',[SosialControllerIndex::class,'index']);
Route::get('/kecamatan',[kecamatancontroller::class,'kecamatan']);

Route::get('/provinsi',[provinsicontroller::class,'provinsi']);

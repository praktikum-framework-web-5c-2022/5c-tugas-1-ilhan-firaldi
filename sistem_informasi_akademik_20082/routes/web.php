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
    return view('home');
});

Route::get('/dosen', function(){
    $dosen = [
        "Rini Mayasari",
        "Purwanto",
        "Susilawati Sobur",
        "Betha Nurina Sari",
        "Intan Purnamasari",
        "Iqbal Maulana",
        "Ratna Mufidah",
        "Asep Jamaludin",
        "Tesa Nur Padilah",
        "Arip Solehudin"
    ];
    return view('dosen')->with('dosen',$dosen);
});

Route::get('/mahasiswa', function(){
    $mahasiswa = [
        "Ilhan Firaldi",
        "Fauzan Arista",
        "Ilham Safaat",
        "Ray Rizky Fawzi",
        "Gilang Maulana",
        "Hanna Athaya",
        "Gidion Bagas",
        "Hagi Azzam",
        "Fanny Suyanto",
        "Ihsan Muhammad"
    ];
    return view('mahasiswa')->with('mahasiswa',$mahasiswa);
});

Route::get('/matakuliah', function(){
    $matakuliah = [
        "Pemrograman Berbasis Mobile",
        "Data Mining",
        "Technopreneur",
        "Framework Pemrograman Mobile",
        "Kalkulus",
        "Statistik & Probabilitas",
        "Aljabar Linear",
        "Bahasa Inggris",
        "Basis Data",
        "Blockchain"
    ];
    return view('matakuliah')->with('matakuliah',$matakuliah);
});

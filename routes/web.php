<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/panduan', function () {
    return view('panduan');
});

Route::get('/testimoni', function () {
    return view('testimoni');
});

Route::get('/hakcipta', function () {
    return view('hakcipta');
});

Route::get('/paten', function () {
    return view('paten');
});

Route::get('/merek', function () {
    return view('merek');
});

Route::get('/desainIndustri', function () {
    return view('desainIndustri');
});

Route::get('/DTLST', function () {
    return view('DTLST');
});

Route::get('/dataki', function () {
    return view('dataki');
});

Route::get('/jasa', function () {
    return view('jasa');
});
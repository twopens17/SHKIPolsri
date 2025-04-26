<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/profile', function () {
    return view('TentangShki.profile');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/sejarah', function () {
    return view('TentangShki.sejarah');
});

Route::get('/visimisi', function () {
    return view('TentangShki.visimisi');
});

Route::get('/prestasi', function () {
    return view('TentangShki.prestasi');
});

Route::get('/struktur', function () {
    return view('TentangShki.struktur');
});

Route::get('/panduan', function () {
    return view('TentangShki.panduan');
});

Route::get('/testimoni', function () {
    return view('TentangShki.testimoni');
});

Route::get('/hakcipta', function () {
    return view('KekayaanIntelektual.hakcipta');
});

Route::get('/paten', function () {
    return view('KekayaanIntelektual.paten');
});

Route::get('/merek', function () {
    return view('KekayaanIntelektual.merek');
});

Route::get('/desainIndustri', function () {
    return view('KekayaanIntelektual.desainIndustri');
});

Route::get('/DTLST', function () {
    return view('KekayaanIntelektual.DTLST');
});

Route::get('/dataki', function () {
    return view('dataki');
});

Route::get('/jasa', function () {
    return view('jasa');
});

Route::get('/komersial', function () {
    return view('komersial');
});

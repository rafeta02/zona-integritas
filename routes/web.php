<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PengaduanController;


Route::get('/',[DetailController::class,'index']);
Route::get('/berita/detail/{slug}', [DetailController::class, 'show'])->name('detail');
Route::get('/pengaduan',[PengaduanController::class,'index']);
Route::get('/search', [NewsController::class, 'search'])->name('search');

Route::get('/lapor', function () {
    return redirect()->away('https://www.lapor.go.id');
});
Route::get('/survey', function () {
   echo "cek link survey";
    //return redirect()->away('https://forms.gle/your-google-form-link');
});

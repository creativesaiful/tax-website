<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\HomeController;

require_once __DIR__.'/jetstream.php';


Route::get('/', [HomeController::class, 'index'] )->name('home');
Route::get('/notice/preview/{id}', [HomeController::class, 'preview'] )->name('notice.preview');






// Admin panel Route start form here 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.pages.dashboard');
    })->name('dashboard');


    Route::get('/notices', [NoticeController::class, 'index'])->name('notices');
    Route::get('/notices/create', [NoticeController::class, 'create'])->name('notices.create');
    Route::post('/notices', [NoticeController::class, 'store'])->name('notices.store');
    Route::get('/notices/{id}', [NoticeController::class, 'show'])->name('notices.show');
    Route::get('/notices/edit/{notice}', [NoticeController::class, 'edit'])->name('notices.edit');
    Route::put('/notices/{notice}', [NoticeController::class, 'update'])->name('notices.update');
    Route::get('/notices/delete/{notice}', [NoticeController::class, 'destroy'])->name('notices.destroy');





});

<?php

use App\Http\Controllers\blogController;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [blogController::class,'index'] )->name('blog.index');
Route::get('/blog/new', [blogController::class,'create'] )->name('blog.new');
Route::post('/blog/new', [blogController::class,'store'] );




Route::get('/blog/{slug}-{id}',[blogController::class,'show'])->where([
    'slug' => '[a-z0-9\-]+',
    'id' => '[0-9]+'
])->name('blog.show');

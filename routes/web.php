<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\PostController;
use Barryvdh\Debugbar\Facades\Debugbar;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/showData', [PostController::class, 'index']);

// Route::get('/blog', [PostController::class, 'index'])->name('blog');
// Route::resource('blog', PostController::class);

// GET
// Route::get('/blog', [PostController::class, 'create'])->name('blog.index');
// Route::get('/blog/{id}', [PostController::class, 'show'])->name('blog.show');

// // POST
// Route::get('/blog/create', [PostController::class, 'create'])->name('blog.create');
// Route::post('/blog', [PostController::class, 'store'])->name('blog.store');

// // PUT OR PATCH
// Route::get('/blog/edit/1', [PostController::class, 'edit'])->name('blog.edit');
// Route::patch('/blog/1', [PostController::class, 'update'])->name('blog.update');

// // DELETE
// Route::delete('/blog/1', [PostController::class, 'destroy'])->name('blog.destroy');

// Multiple HTTP Verbs

// Route::match(['GET', 'POST'], '/blog', [PostController::class, 'index']);

// Resource Route
// Route::resource('/', PostController::class);



// Route::any('/blog', [PostController::class, 'index']);

Route::prefix('/blog')->group(function(){
        // GET
        Route::get('/', [PostController::class, 'index'])->name('blog.index');
        Route::get('/{id}', [PostController::class, 'show'])->name('blog.show');
    
        // POST
        Route::get('/create', [PostController::class, 'create'])->name('blog.create');
        Route::post('/', [PostController::class, 'store'])->name('blog.store');
    
        // PUT OR PATCH
        Route::get('/edit/{id}', [PostController::class, 'edit'])->name('blog.edit');
        Route::patch('/{id}', [PostController::class, 'update'])->name('blog.update');
    
        // DELETE
        Route::delete('/{id}', [PostController::class, 'destroy'])->name('blog.destroy');
});

Route::fallback(FallbackController::class);



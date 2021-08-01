<?php

use Illuminate\Support\Facades\Route;
use App\Domain\Repositories\CimaRepository;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/cima/{page?}', function (Request $request, $page = 1) {
    $drugs = (new CimaRepository())->all($page);
    return view('cima.list', $drugs);
})->middleware(['auth'])->name('cima.list');

require __DIR__.'/auth.php';

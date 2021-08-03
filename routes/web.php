<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/cima', function (Request $request) {
    if(!empty($_GET)) {
        $request->flash();
        $filters = [
            'nombre' => $request->nombre,
            'laboratorio' => $request->laboratorio,
            'cn' => $request->cn,
            'atc' => $request->atc,
            'nregistro' => $request->nregistro,
            'vmp' => $request->vmp,
            'npactiv' => $request->npactiv,
            'practiv1' => $request->practiv1,
            'idpractiv1' => $request->idpractiv1,
            'practiv2' => $request->practiv2,
            'idpractiv2' => $request->idpractiv2,
            'triangulo' => $request->triangulo,
            'huerfano' => $request->huerfano,
            'biosimilar' => $request->biosimilar,
            'comerc' => $request->comerc,
            'sust' => $request->sust,
            'pagina' => $request->pagina
        ];
        
        $drugs = (new CimaRepository())->filter($filters);
    } else {
        $request->flush();
        $drugs = (new CimaRepository())->all();
    }
    return view('cima.list', $drugs);
})->middleware(['auth'])->name('cima.list');

Route::get('/cima/{id}', function ($id) {
    $drug = (new CimaRepository())->show($id);
    return view('cima.show', $drug);
})->middleware('auth')->name('cima.show');

require __DIR__.'/auth.php';

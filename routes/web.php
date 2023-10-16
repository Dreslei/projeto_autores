<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LivroController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/autores', function () {
//     return view('autores');
// })->middleware(['auth', 'verified'])->name('autores');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::resource('autores', AutorController::class);

Route::resource('generos', GeneroController::class);

Route::resource('livros', LivroController::class);


// Route::get('/autores/create', [AutorController::class, 'create'])->name('autores.create');

// GET /autores: Listagem de autores (index)
// GET /autores/create: Formulário para criar um novo autor (create)
// POST /autores: Salvar um novo autor no banco de dados (store)
// GET /autores/{id}: Exibir detalhes de um autor específico (show)
// GET /autores/{id}/edit: Formulário para editar um autor (edit)
// PUT/PATCH /autores/{id}: Atualizar os dados de um autor no banco de dados (update)
// DELETE /autores/{id}: Excluir um autor do banco de dados (destroy)


require __DIR__.'/auth.php';

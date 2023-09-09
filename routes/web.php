<?php

use App\Http\Controllers\GrammarController;
use App\Http\Controllers\SeparateController;
use App\Http\Controllers\WordAllController;
use App\Http\Controllers\WordController;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::view('/', 'index')->name('home');
Route::redirect('/home', '/')->name('home.redirect');

Route::get('grammar', [GrammarController::class, 'index'])->name('grammar');
Route::get('grammar/{post}', [GrammarController::class, 'show'])->name('grammar.show');

Route::get('words-all', [WordAllController::class, 'index'])->name('words-all');

Route::get('words/create', [WordController::class, 'create'])->name('words.create');
Route::post('words', [WordController::class, 'store'])->name('words.store');

Route::get('words', [WordController::class, 'index'])->name('words');
Route::get('words/{post}', [WordController::class, 'show'])->name('words.show');

Route::delete('words/{post}', [WordController::class, 'destroy'])->name('words.destroy');

Route::get('words/{post}/edit', [WordController::class, 'edit'])->name('words.edit');
Route::put('words/{post}', [WordController::class, 'update'])->name('words.update');

Route::get('separate', [SeparateController::class, 'index'])->name('separate');



//Route::get('rule', [RuleController::class, 'rules.index'])->name('rule');
//Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');
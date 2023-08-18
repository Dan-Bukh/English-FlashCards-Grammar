<?php

use App\Http\Controllers\GrammarController;
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


Route::get('words', [WordController::class, 'index'])->name('words');
Route::get('words/{post}', [WordController::class, 'show'])->name('words.show');

//Route::get('rule', [RuleController::class, 'rules.index'])->name('rule');
//Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;


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
//     return view('welcome');
// });

Route::get('/',[WordController::class, 'welcome'])->name('welcome');
Route::get('/game', [WordController::class, 'index'])->name('game');
Route::post('/word', [WordController::class, 'word'])->name('word.post');
Route::get('/getword/{total_score}/{input}/{input2}/{input3}/{input4}/{input5}/{input6}/{input7}/{input8}/{input9}/{input10}', [WordController::class, 'getword'])->name('word.get');
Route::post('/score', [WordController::class, 'score'])->name('score.post');

<?php

use App\Http\Controllers\CalcController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AutomobiliaiController;
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

Route::get('/automobiliai',[AutomobiliaiController::class, 'index'])->name('automobiliai.index'); 
    Route::get('/automobiliai/create',[ AutomobiliaiController::class, 'create'])->name('automobiliai.create');
    Route::post('/automobiliai/save',[ AutomobiliaiController::class, 'save'])->name('automobiliai.save');
    Route::get('/automobiliai/{id}/edit',[ AutomobiliaiController::class, 'edit'])->name('automobiliai.edit');
    Route::post('/automobiliai/{id}/update',[AutomobiliaitController::class,'update'])->name('automobiliai.update');
    Route::get('/automobiliai/{id}/delete',[AutomobiliaiController::class,'delete'])->name('automobiliai.delete');
    Route::post('/automobiliai/search',[AutomobiliaiController::class,'search'])->name('automobiliai.search');


    Route::resource('courses', CourseController::class);

Route::get('/calc/',[CalcController::class, 'showForm' ])->name("form");
Route::post('/calc/result',[CalcController::class, 'result' ])->name("result");

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

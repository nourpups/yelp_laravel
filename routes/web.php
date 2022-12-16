<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrganisationController;
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
Route::get('/', [FrontController::class, 'landing'])->name('landing');
Route::get('app/organisations', [FrontController::class, 'index_organisation'])->name('app.organisations');
Route::get('/app/organisations/{id}',[FrontController::class, 'page_organisation'])->name('app.organisations.page');
Route::post('/app/organisations/{id}/comment',[OrganisationController::class, 'add_comment'])->name('app.organisations.comment');
Route::get('/organisations', [OrganisationController::class, 'index'])->name('organisation.index');
Route::post('/organisation', [OrganisationController::class, 'store'])->name('organisation.store');
Route::put('/organisation/edit/{id}', [OrganisationController::class, 'edit'])->name('organisation.edit');
Route::delete('/organisation/delete/{id}', [OrganisationController::class, 'destroy'])->name('organisation.delete');
Route::patch('/organisation/attach_category/{id}', [OrganisationController::class, 'attach_category'])->name('organisation.attach_category');

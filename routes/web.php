<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Auth::routes();

Route::get('/', function(){
    return view('home');
})->name('homeReal');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'root'])->name('home');
Route::post('/formsubmit', [App\Http\Controllers\HomeController::class, 'FormSubmit'])->name('FormSubmit');

Route::post('/clogin', [App\Http\Controllers\AuthController::class, 'login'])->name('clogin');
Route::post('/vemail', [App\Http\Controllers\AuthController::class, 'validateEmail'])->name('validate.email');
Route::post('/vname', [App\Http\Controllers\AuthController::class, 'validateName'])->name('validate.name');
Route::post('/vpassword', [App\Http\Controllers\AuthController::class, 'validatePassword'])->name('validate.password');
Route::post('/cregister', [App\Http\Controllers\AuthController::class, 'register'])->name('cregister');
Route::get('authorized/google', [App\Http\Controllers\AuthController::class, 'redirectToGoogle'])->name('login-google');
Route::get('authorized/google/callback', [App\Http\Controllers\AuthController::class, 'handleGoogleCallback']);

Route::get('storage', [App\Http\Controllers\StorageController::class, 'index'])->name('storage');
Route::post('storage-getdocs', [App\Http\Controllers\StorageController::class, 'getDocs'])->name('storage.getDocs');
Route::post('storage-deletefile', [App\Http\Controllers\StorageController::class, 'deleteFile'])->name('storage.deleteFile');
Route::post('storage-renamefile', [App\Http\Controllers\StorageController::class, 'renameFile'])->name('storage.renameFile');
Route::post('storage-uploadfile', [App\Http\Controllers\StorageController::class, 'uploadFile'])->name('storage.uploadFile');
Route::post('storage-createfolder', [App\Http\Controllers\StorageController::class, 'createFolder'])->name('storage.createFolder');
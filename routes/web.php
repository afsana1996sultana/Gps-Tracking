<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admins\UserController;
use App\Http\Controllers\Admins\NewsletterController;
use App\Http\Controllers\Admins\StatusController;
use App\Http\Controllers\Admins\QuicklinkController;
use App\Http\Controllers\Admins\SociallinkController;
use App\Http\Controllers\Admins\MenuController;
use App\Http\Controllers\Admins\SubmenuController;
use App\Http\Controllers\Admins\TelepartnerController;
use Illuminate\Support\Facades\Auth;

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
//Frontend

Route::get('home', function(){
    return redirect('/');
});

Route::get('/', [App\Http\Controllers\FrontendController::class, 'home'])->name('home');

Route::get('home', [App\Http\Controllers\FrontendController::class, 'home'])->name('home');


////////////////////Newsletter-Post/////////////////////////
Route::post('newsletter_store',[NewsletterController::class,'store' ])->name('newsletter_store');


Route::get('admin', function(){
    return redirect('login');
});

Auth::routes();



Route::group(['middleware' =>  'auth'], function() {
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');



////////////////////Newsletter/////////////////////////
Route::resource('newsletter', App\Http\Controllers\Admins\NewsletterController::class);
Route::get('show-newsletter/{id}',[NewsletterController::class,'show' ]);
Route::delete('delete-newsletter',[NewsletterController::class,'destroy' ]);


//////////////////////Menu/////////////////////////////////
Route::resource('menu', App\Http\Controllers\Admins\MenuController::class);
Route::get('edit-menu/{id}', [MenuController::class, 'edit']);
Route::put('menu-update', [MenuController::class, 'update']);
Route::delete('delete-menu', [MenuController::class, 'destroy']);



//////////////////////Sub-Menu/////////////////////////////////
Route::resource('sub-menu', App\Http\Controllers\Admins\SubmenuController::class);
Route::get('edit-sub-menu/{id}', [SubmenuController::class, 'edit']);
Route::put('sub-menu-update', [SubmenuController::class, 'update']);
Route::delete('delete-sub-menu', [SubmenuController::class, 'destroy']);


////////////////////Header/////////////////////////////////
Route::resource('header', App\Http\Controllers\Admins\HeaderController::class);


////////////////////Footer/////////////////////////////////
Route::resource('footer', App\Http\Controllers\Admins\FooterController::class);


//////////////////////Quicklink/////////////////////////////////
Route::resource('quick-link', App\Http\Controllers\Admins\QuicklinkController::class);
Route::get('edit-quick-link/{id}', [QuicklinkController::class, 'edit']);
Route::put('quick-link-update', [QuicklinkController::class, 'update']);
Route::delete('delete-quick-link', [QuicklinkController::class, 'destroy']);


//////////////////////Sociallink/////////////////////////////////
Route::resource('social-link', App\Http\Controllers\Admins\SociallinkController::class);
Route::get('edit-social-link/{id}', [SociallinkController::class, 'edit']);
Route::put('social-link-update', [SociallinkController::class, 'update']);
Route::delete('delete-social-link', [SociallinkController::class, 'destroy']);



//////////////////////Telepartner/////////////////////////////////
Route::resource('tele-partner', App\Http\Controllers\Admins\TelepartnerController::class);
Route::get('edit-tele-partner/{id}', [TelepartnerController::class, 'edit']);
Route::put('tele-partner-update', [TelepartnerController::class, 'update']);
Route::delete('delete-tele-partner', [TelepartnerController::class, 'destroy']);


//////////////////////Status/////////////////////////////////
Route::resource('status', App\Http\Controllers\Admins\StatusController::class);
Route::get('edit-status/{id}', [StatusController::class, 'edit']);
Route::put('status-update', [StatusController::class, 'update']);
Route::delete('delete-status', [StatusController::class, 'destroy']);


////////////////////User/////////////////////////
Route::resource('users', UserController::class);
Route::get('edit-users/{id}',[UserController::class,'edit' ]);
Route::put('users-update',[UserController::class,'update' ]);
Route::get('show-users/{id}',[UserController::class,'show' ]);
Route::delete('delete-users',[UserController::class,'destroy' ]);


});

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
use App\Http\Controllers\Admins\ClientController;
use App\Http\Controllers\Admins\AchievementController;
use App\Http\Controllers\Admins\TestimonialController;
use App\Http\Controllers\Admins\CartrakerController;
use App\Http\Controllers\Frontend\AboutusController;
use App\Http\Controllers\Frontend\OurserviceController;
use App\Http\Controllers\Frontend\OurclientController;
use App\Http\Controllers\Frontend\PricingController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactusController;
use App\Http\Controllers\Frontend\PayController;
use App\Http\Controllers\Frontend\OurteamController;
use App\Http\Controllers\Frontend\PrivacyController;
use App\Http\Controllers\Frontend\TermsController;
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

Route::get('/', function(){
    return redirect('/home');
});

// Route::get('/', [App\Http\Controllers\FrontendController::class, 'home'])->name('home');

Route::get('home', [App\Http\Controllers\FrontendController::class, 'home'])->name('home');


////////////////////Newsletter-Post/////////////////////////
Route::post('newsletter_store',[NewsletterController::class,'store' ])->name('newsletter_store');


////////////////////About-Us/////////////////////////
Route::get('/about-us',[AboutusController::class,'index' ]);


////////////////////Our-Services/////////////////////////
Route::get('/our-services',[OurserviceController::class,'index' ]);


////////////////////Our-Clients/////////////////////////
Route::get('/our-clients',[OurclientController::class,'index' ]);


////////////////////Pricing/////////////////////////
Route::get('/pricing',[PricingController::class,'index' ]);


////////////////////Blog/////////////////////////
Route::get('/blog',[BlogController::class,'index' ]);


////////////////////Contact-Us/////////////////////////
Route::get('/contact-us',[ContactusController::class,'index' ]);


////////////////////Pay/////////////////////////
Route::get('/pay',[PayController::class,'index' ]);


////////////////////Our-Team/////////////////////////
Route::get('/our-team',[OurteamController::class,'index' ]);


////////////////////Privacy-Policy/////////////////////////
Route::get('/privacy-policy',[PrivacyController::class,'index' ]);


////////////////////Terms & Condition/////////////////////////
Route::get('/terms&condition',[TermsController::class,'index' ]);


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


////////////////////Video-Content/////////////////////////////////
Route::resource('content', App\Http\Controllers\Admins\VideocontentController::class);


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



//////////////////////Clients/////////////////////////////////
Route::resource('clients', App\Http\Controllers\Admins\ClientController::class);
Route::get('edit-clients/{id}', [ClientController::class, 'edit']);
Route::put('clients-update', [ClientController::class, 'update']);
Route::delete('delete-clients', [ClientController::class, 'destroy']);


//////////////////////Achievements/////////////////////////////////
Route::resource('achievements', App\Http\Controllers\Admins\AchievementController::class);
Route::get('edit-achievements/{id}', [AchievementController::class, 'edit']);
Route::put('achievements-update', [AchievementController::class, 'update']);
Route::delete('delete-achievements', [AchievementController::class, 'destroy']);



//////////////////////Testimonial/////////////////////////////////
Route::resource('testimonials', App\Http\Controllers\Admins\TestimonialController::class);
Route::get('edit-testimonials/{id}', [TestimonialController::class, 'edit']);
Route::put('testimonials-update', [TestimonialController::class, 'update']);
Route::delete('delete-testimonials', [TestimonialController::class, 'destroy']);



//////////////////////Cartrakers/////////////////////////////////
Route::resource('car-trakers', App\Http\Controllers\Admins\CartrakerController::class);
Route::get('edit-car-trakers/{id}', [CartrakerController::class, 'edit']);
Route::put('car-trakers-update', [CartrakerController::class, 'update']);
Route::delete('delete-car-trakers', [CartrakerController::class, 'destroy']);



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

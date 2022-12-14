<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admins\UserController;
use App\Http\Controllers\Admins\NewsletterController;
use App\Http\Controllers\Admins\MessageController;
use App\Http\Controllers\Admins\OrderController;
use App\Http\Controllers\Admins\StatusController;
use App\Http\Controllers\Admins\QuicklinkController;
use App\Http\Controllers\Admins\SociallinkController;
use App\Http\Controllers\Admins\MenuController;
use App\Http\Controllers\Admins\SubmenuController;
use App\Http\Controllers\Admins\TelepartnerController;
use App\Http\Controllers\Admins\ClientController;
use App\Http\Controllers\Admins\TeamController;
use App\Http\Controllers\Admins\ChoosensectionController;
use App\Http\Controllers\Admins\AchievementController;
use App\Http\Controllers\Admins\TestimonialController;
use App\Http\Controllers\Admins\CartrakerController;
use App\Http\Controllers\Admins\ServiceController;
use App\Http\Controllers\Admins\AddpricingController;
use App\Http\Controllers\Admins\AllblogController;
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
use App\Http\Controllers\Frontend\ServiceunitController;
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

//Route::get('/', [App\Http\Controllers\FrontendController::class, 'home'])->name('home');

Route::get('home', [App\Http\Controllers\FrontendController::class, 'home'])->name('home');


////////////////////Newsletter-Post/////////////////////////
Route::post('newsletter_store',[NewsletterController::class,'store' ])->name('newsletter_store');


////////////////////Message-Post/////////////////////////
Route::post('message_store',[MessageController::class,'store' ])->name('message_store');


////////////////////Order/////////////////////////
Route::post('order_store',[OrderController::class,'store' ])->name('order_store');


////////////////////About-Us/////////////////////////
Route::get('/about-us',[AboutusController::class,'index' ]);


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


////////////////////Service-Unit/////////////////////////
Route::get('service_unit/{url}',[ServiceunitController::class,'service_unit' ]);


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


////////////////////About/////////////////////////////////
Route::resource('about', App\Http\Controllers\Admins\AboutController::class);


////////////////////Contact/////////////////////////////////
Route::resource('contact', App\Http\Controllers\Admins\ContactController::class);


////////////////////Privacy-Policy/////////////////////////////////
Route::resource('privacy', App\Http\Controllers\Admins\PrivacypolicyController::class);


////////////////////Terms-Condition/////////////////////////////////
Route::resource('terms-conditions', App\Http\Controllers\Admins\TermsconditionController::class);


////////////////////Profile/////////////////////////////////
Route::resource('user-profile', App\Http\Controllers\Admins\ProfileController::class);


///////////////////////Add-Pricing/////////////////////////////////
Route::resource('add-pricing', App\Http\Controllers\Admins\AddpricingController::class);
Route::delete('delete-add-pricing', [AddpricingController::class, 'destroy']);


///////////////////////Blog/////////////////////////////////
Route::resource('blog-list', App\Http\Controllers\Admins\AllblogController::class);
Route::delete('delete-blog-list', [AllblogController::class, 'destroy']);


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



//////////////////////Our-Telepartner/////////////////////////////////
Route::resource('tele-partner', App\Http\Controllers\Admins\TelepartnerController::class);
Route::get('edit-tele-partner/{id}', [TelepartnerController::class, 'edit']);
Route::put('tele-partner-update', [TelepartnerController::class, 'update']);
Route::delete('delete-tele-partner', [TelepartnerController::class, 'destroy']);



//////////////////////Our-Clients/////////////////////////////////
Route::resource('clients', App\Http\Controllers\Admins\ClientController::class);
Route::get('edit-clients/{id}', [ClientController::class, 'edit']);
Route::put('clients-update', [ClientController::class, 'update']);
Route::delete('delete-clients', [ClientController::class, 'destroy']);


// ////////////////////Our-Team/////////////////////////////////
Route::resource('team', App\Http\Controllers\Admins\TeamController::class);
Route::get('edit-team/{id}', [TeamController::class, 'edit']);
Route::put('team-update', [TeamController::class, 'update']);
Route::delete('delete-team', [TeamController::class, 'destroy']);


//////////////////////Choosensection/////////////////////////////////
Route::resource('choosen-section', App\Http\Controllers\Admins\ChoosensectionController::class);
Route::get('edit-choosen-section/{id}', [ChoosensectionController::class, 'edit']);
Route::put('choosen-section-update', [ChoosensectionController::class, 'update']);
Route::delete('delete-choosen-section', [ChoosensectionController::class, 'destroy']);


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



//////////////////////Services/////////////////////////////////
Route::resource('service', App\Http\Controllers\Admins\ServiceController::class);
Route::get('edit-service/{id}', [ServiceController::class, 'edit']);
Route::put('service-update', [ServiceController::class, 'update']);
Route::delete('delete-service', [ServiceController::class, 'destroy']);



//////////////////////Status/////////////////////////////////
Route::resource('status', App\Http\Controllers\Admins\StatusController::class);
Route::get('edit-status/{id}', [StatusController::class, 'edit']);
Route::put('status-update', [StatusController::class, 'update']);
Route::delete('delete-status', [StatusController::class, 'destroy']);


////////////////////Message/////////////////////////
Route::resource('message', App\Http\Controllers\Admins\MessageController::class);
Route::get('show-message/{id}',[MessageController::class,'show' ]);
Route::delete('delete-message',[MessageController::class,'destroy' ]);


////////////////////Order/////////////////////////
Route::resource('order', App\Http\Controllers\Admins\OrderController::class);
Route::get('show-order/{id}',[OrderController::class,'show' ]);
Route::delete('delete-order',[OrderController::class,'destroy' ]);


////////////////////User/////////////////////////
Route::resource('users', UserController::class);
Route::get('edit-users/{id}',[UserController::class,'edit' ]);
Route::put('users-update',[UserController::class,'update' ]);
Route::get('show-users/{id}',[UserController::class,'show' ]);
Route::delete('delete-users',[UserController::class,'destroy' ]);


});

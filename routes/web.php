<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialiteController;
use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', [ProfileController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin',[AdminController::class,'index'])->name('admin');
    Route::post('Subscriptions/{subscription}/revoke',[AdminController::class,'destroy']);
    Route::get('Subscriptions/{subscription}/addDays',[AdminController::class,'addDays']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::prefix('payment')->group(function(){
    Route::get('/{plan}/plan',[PayPalController::class,'payment'])->name('payment');
    Route::post('/increase',[PayPalController::class,'increasePayment'])->name('payment.increase');
    Route::get('/subscription/{subscription}/success',[PayPalController::class,'success'])->name('payment.success');
    Route::get('/subscription/{subscription}/cancel',[PayPalController::class,'cancel'])->name('payment.cancel');
});
});

require __DIR__.'/auth.php';


    Route::get('',function(){
        $plans = Plan::all();
        return view('index',compact('plans'));
    })->name('home');
    Route::get('/FAQ',function(){
        return view('faq');
    })->name('faq_page');
    Route::get('/about',function(){
        return view('about');
    })->name('about_page');
    Route::get('/terms',function(){
        return view('terms');
    })->name('terms_page');
    Route::get('/privacy',function(){
        return view('privacy');
    })->name('privacy_page');


Route::prefix('auth')->group(function(){
    Route::get('google',[SocialiteController::class,'redirectToGoogle'])->name('redirectToGoogle');
    Route::get('google/callback',[SocialiteController::class,'handleGoogleCallback'])->name('handleGoogleCallback');
    Route::get('twitter',[SocialiteController::class,'redirectToTwitter'])->name('redirectToTwitter');
    Route::get('twitter/callback',[SocialiteController::class,'handleTwitterCallback'])->name('handleTwitterCallback');
    Route::get('facebook',[SocialiteController::class,'redirectToFacebook'])->name('redirectToFacebook');
    Route::get('facebook/callback',[SocialiteController::class,'handleFacebookCallback'])->name('handleFacebookCallback');
});
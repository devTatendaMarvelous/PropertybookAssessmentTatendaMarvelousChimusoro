<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LadingPageController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PricesController;
use App\Http\Controllers\FooterController;

  Route::get('/',[LadingPageController::class,'index'] );
  Route::get('/admin',function(){
    return redirect('home');
  });
          
Route::middleware(['auth'])->group(function () {

  // =====================Hero======================================
Route::get('/hero',[HeroController::class,'index'])->name('hero');
Route::post('/hero/store',[HeroController::class,'store']);
Route::get('/hero/{id}/edit', [HeroController::class, 'edit']);
Route::get('/hero/{id}/delete', [HeroController::class, 'destroy']);
Route::put('/hero/{id}/update', [HeroController::class, 'update'])->name('hero.update');
// =============================================================================================================

  // =====================about======================================
Route::get('/about',[aboutController::class,'index'])->name('about');
Route::post('/about/store',[aboutController::class,'store']);
Route::get('/about/{id}/edit', [aboutController::class, 'edit']);
Route::get('/about/{id}/delete', [aboutController::class, 'destroy']);
Route::put('/about/{id}/update', [aboutController::class, 'update'])->name('about.update');
// =============================================================================================================
 // =====================Services======================================
Route::get('/services',[ServicesController::class,'index'])->name('services');
Route::get('/services/create',[ServicesController::class,'create'])->name('services.create');
Route::post('/services/store',[ServicesController::class,'store'])->name('services.store');
Route::get('/services/{id}/edit', [ServicesController::class, 'edit']);
Route::get('/services/{id}/delete', [ServicesController::class, 'destroy']);
Route::put('/services/{id}/update', [ServicesController::class, 'update'])->name('services.update');
// =============================================================================================================
// =====================prices======================================
Route::get('/prices',[PricesController::class,'index'])->name('prices');
Route::get('/prices/create',[PricesController::class,'create'])->name('prices.create');
Route::post('/prices/store',[PricesController::class,'store'])->name('prices.store');
Route::get('/prices/{id}/edit', [PricesController::class, 'edit']);
Route::get('/prices/{id}/delete', [PricesController::class, 'destroy']);
Route::put('/prices/{id}/update', [PricesController::class, 'update'])->name('prices.update');
// =============================================================================================================
// =====================footer======================================
Route::get('/footer',[FooterController::class,'index'])->name('footer');
Route::post('/footer/store',[FooterController::class,'store']);
Route::get('/footer/{id}/edit', [FooterController::class, 'edit']);
Route::get('/footer/{id}/delete', [FooterController::class, 'destroy']);
Route::put('/footer/{id}/update', [FooterController::class, 'update'])->name('footer.update');
// =============================================================================================================




  //===========USER PROFILES=====
Route::get('/profile/{id}', [UserProfileController::class, 'index']);
Route::post('/profile/{id}/edit', [UserProfileController::class, 'update']);
Route::post('/profile/{id}/password', [UserProfileController::class, 'password']);
// ===========================================================================================================================
        
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

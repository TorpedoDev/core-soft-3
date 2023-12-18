<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AppController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PricingController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TechnologyController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Architecture\Services\ServiceContainer;

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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/section' , SectionController::class);
    Route::get('/section/changestatus/{id}' , [SectionController::class , 'changeStatus'])->name('section.changestatus');
    
    Route::resource('/technology' , TechnologyController::class);
    Route::get('/technology/changestatus/{id}' , [TechnologyController::class , 'changeStatus'])->name('technology.changestatus');

    Route::resource('/messages' , MessageController::class);

    Route::resource('/question' , QuestionController::class);
    Route::get('/question/changestatus/{id}' , [ServiceController::class , 'changeStatus'])->name('question.changestatus');

    Route::resource('/service' , ServiceController::class);
    Route::get('/service/changestatus/{id}' , [ServiceController::class , 'changeStatus'])->name('service.changestatus');


    Route::resource('/contact' , ContactController::class);
    Route::get('/contact/changestatus/{id}' , [ContactController::class , 'changeStatus'])->name('contact.changestatus');


    Route::resource('/blog' , BlogController::class);
    Route::get('/blog/changestatus/{id}' , [BlogController::class , 'changeStatus'])->name('blog.changestatus');


    Route::resource('/team' , TeamController::class);
    Route::get('/team/changestatus/{id}' , [TeamController::class , 'changeStatus'])->name('team.changestatus');

    Route::resource('/app' , AppController::class);
    Route::get('/app/changestatus/{id}' , [AppController::class , 'changeStatus'])->name('app.changestatus');

    Route::resource('/about' , AboutController::class);
    Route::get('/about/changestatus/{id}' , [AboutController::class , 'changeStatus'])->name('about.changestatus');


    Route::resource('/pricing' , PricingController::class);
    Route::get('/pricing/changestatus/{id}' , [PricingController::class , 'changeStatus'])->name('pricing.changestatus');
    Route::get('/pricing/showselected/{id}' , [PricingController::class , 'showselected'])->name('pricing.showselected');

});

require __DIR__.'/auth.php';


Route::get('/home' , [HomeController::class , 'home']);
<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\ContactUsController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\ExhibitionController;
use App\Http\Controllers\admin\MediaExhibitionController;
use App\Http\Controllers\admin\PartnerController;
use App\Http\Controllers\Auth\RegisteredUserController;;
use App\Http\Controllers\admin\SectionController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\Website\ContactController;
use Illuminate\Routing\RouteGroup;
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

// Route::get('/', function () {
//     return view('website.welcome');
// });
Route::group([
    'prefix' => LaravelLocalization::setLocale(),    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Route::get('/', function () {
     return   redirect(route('home-page'));
    });



    Auth::routes();


    Route::get('/', [App\Http\Controllers\website\HomePageController::class, 'index'])->name('home-page');
   
    Route::get('all-services', [ServiceController::class, 'AllServices'])->name('all-services');
    Route::get('all-events', [EventController::class, 'AllEvents'])->name('all-events');
    Route::get('all-exhibitions', [ExhibitionController::class, 'AllExhibitions'])->name('all-exhibitions');
    Route::get('single-events/{id}', [EventController::class, 'SingleEvents'])->name('single-events');
    Route::get('single-services/{id}', [ServiceController::class, 'SingleServices'])->name('single-services');
    Route::get('single-exhibitions/{id}', [ExhibitionController::class, 'SingleExhibitions'])->name('single-exhibitions');

    Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
    Route::get('/all_contact-us', [ContactController::class, 'AllContact'])->name('all_contact-us');
    Route::post('/storeContact', [ContactController::class, 'store'])->name('storeContact');
    Route::delete('/contact-us_delete', [ContactController::class, 'destroy'])->name('contact-us_delete');

        
    Route::prefix('admin')->middleware('auth')->group(function () {
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::resource('clients', ClientController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('events', EventController::class);
        Route::resource('exhibitions', ExhibitionController::class);
        Route::resource('mediaExhibitions', MediaExhibitionController::class);
        Route::resource('sliders', SliderController::class);
        Route::resource('partners', PartnerController::class);
        Route::get('settings',[SettingController::class,'index'])->name('settings');
        Route::get('settingEdit/{id}',[SettingController::class,'edit'])->name('settingEdit');
        Route::post('settingUpdate/{id}',[SettingController::class,'update'])->name('settingUpdate');
        Route::get('sections',[SectionController::class,'index'])->name('sections');
        Route::get('sections-edit/{id}',[SectionController::class,'edit'])->name('sections-edit');
        Route::post('section-update/{id}',[SectionController::class,'update'])->name('section-update');
        Route::get('profile-edit',[RegisteredUserController::class,'edit'])->name('profile-edit');
        Route::post('profile-update/{id}',[RegisteredUserController::class,'update'])->name('profile-update');
    });
});




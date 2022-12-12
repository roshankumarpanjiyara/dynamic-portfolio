<?php

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

Route::get('/', function () {
    return view('frontend.layouts.index');
});

// Contact Controller
Route::get('/contacts/create','App\Http\Controllers\Backend\ContactController@create')->name('contacts.create');
Route::post('/contacts/store', [App\Http\Controllers\Backend\ContactController::class, 'store'])->name('contacts.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::prefix('dashboard')->group(function(){
        //profile
        Route::prefix('profile')->group(function(){
            Route::get('/view', [App\Http\Controllers\UserController::class, 'ProfileView'])->name('profile.view');
            Route::get('/profile-edit', [App\Http\Controllers\UserController::class, 'ProfileEdit'])->name('profile.edit');
            Route::patch('/update', [App\Http\Controllers\UserController::class, 'ProfileUpdate'])->name('profile.update');
            Route::get('/password/view', [App\Http\Controllers\UserController::class, 'PasswordView'])->name('password.view');
            Route::patch('/password/change', [App\Http\Controllers\UserController::class, 'PasswordChange'])->name('password.change');
        });
        //banner
        Route::controller(App\Http\Controllers\Backend\BannerController::class)->group(function(){
            Route::get('/banner','index')->name('banner.index');
            Route::post('/update/banner/{id}','update')->name('banner.update');
        });
        //about
        Route::controller(App\Http\Controllers\Backend\AboutController::class)->group(function(){
            Route::get('/about','index')->name('about.index');
            Route::post('/update/about/{id}','update')->name('about.update');
        });
        //skill
        Route::resource('skills','App\Http\Controllers\Backend\SkillController');
        //resume
        Route::controller(App\Http\Controllers\Backend\ResumeController::class)->group(function(){
            //summary
            Route::get('/summary','SummaryIndex')->name('summary.index');
            Route::post('/update/summary/{id}','SummaryUpdate')->name('summary.update');
            //education
            Route::get('/educations/create','EducationCreate')->name('educations.create');
            Route::post('/educations/store','EducationStore')->name('educations.store');
            Route::get('/educations','EducationIndex')->name('educations.index');
            Route::delete('/educations/destroy/{id}','EducationDestroy')->name('educations.destroy');
            Route::get('/educations/{id}/edit', 'EducationEdit')->name('educations.edit');
            Route::patch('/educations/{id}/update', 'EducationUpdate')->name('educations.update');
            //experience
            Route::get('/experiences/create','ExperienceCreate')->name('experiences.create');
            Route::post('/experiences/store','ExperienceStore')->name('experiences.store');
            Route::get('/experiences','ExperienceIndex')->name('experiences.index');
            Route::delete('/experiences/destroy/{id}','ExperienceDestroy')->name('experiences.destroy');
            Route::get('/experiences/{id}/edit', 'ExperienceEdit')->name('experiences.edit');
            Route::patch('/experiences/{id}/update', 'ExperienceUpdate')->name('experiences.update');
            //certification
            Route::get('/certifications/create','CertificationCreate')->name('certifications.create');
            Route::post('/certifications/store','CertificationStore')->name('certifications.store');
            Route::get('/certifications','CertificationIndex')->name('certifications.index');
            Route::delete('/certifications/destroy/{id}','CertificationDestroy')->name('certifications.destroy');
            Route::get('/certifications/{id}/edit', 'CertificationEdit')->name('certifications.edit');
            Route::patch('/certifications/{id}/update', 'CertificationUpdate')->name('certifications.update');
        });
        //Contact Controller
        Route::get('/contacts','App\Http\Controllers\Backend\ContactController@index')->name('contacts.index');
        Route::delete('/contacts/destroy/{id}','App\Http\Controllers\Backend\ContactController@destroy')->name('contacts.destroy');
    });
});

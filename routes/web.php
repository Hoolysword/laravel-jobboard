<?php
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Models\Job;
use App\Mail\JobPosted;

Route::get('test',function(){
    Mail::tp('test@gmail.com')->send(
        new JobPosted()
    );
    return 'done';
});
Route::view('/','home');
Route::view('/contact','contact');

    Route::controller(JobController::class)->group(function () {
        Route::get('/jobs', 'index');
        Route::get('/jobs/create', 'create');
        Route::post('/jobs', 'store')->middleware('auth');
        Route::get('/jobs/{job}', 'show');
        Route::get('/jobs/{job}/edit', 'edit')->middleware(['auth','can:edit-jobs,job']);
        Route::patch('/jobs/{job}', 'update');
        Route::delete('/jobs/{job}', 'delete');
    });


Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);
Route::get('/login',[SessionController::class,'create'])->name('login');
Route::post('/login',[SessionController::class,'store']);
Route::delete('/login',[SessionController::class,'destroy']);
//index

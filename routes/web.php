<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/appointment', [PagesController::class, 'appointment'])->name('appointment');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/viewdetails/{id}', [PagesController::class, 'viewdetails'])->name('viewdetails');
Route::get('/showregister/{id}', [PagesController::class, 'showregister'])->name('showregister');

Route::middleware('auth')->group(function () {
    Route::post('/patient/store',[PatientController::class,'store'])->name('patients.store');
});

Route::middleware('auth', 'isadmin', 'verified')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    //Doctors
    Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
    Route::get('/doctors/create', [DoctorController::class, 'create'])->name('doctors.create');
    Route::post('/doctors/store', [DoctorController::class, 'store'])->name('doctors.store');
    Route::get('/doctors/{id}/edit', [DoctorController::class, 'edit'])->name('doctors.edit');
    Route::post('/doctors/{id}/update', [DoctorController::class, 'update'])->name('doctors.update');
    Route::get('/doctors/{id}/destroy', [DoctorController::class, 'destroy'])->name('doctors.destroy');

    // Patients
    Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
   
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';

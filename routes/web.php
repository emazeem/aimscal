<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('service/{type}',[HomeController::class,'service'])->name('service');
Route::get('contact-us',[HomeController::class,'contactUs'])->name('contact.us');
Route::get('about-us',[HomeController::class,'aboutUs'])->name('about.us');
Route::get('our-team',[HomeController::class,'ourTeam'])->name('our.team');
Route::post('send-email',[HomeController::class,'sendMail'])->name('contact.send.mail');

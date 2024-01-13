<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TestimonialController;
use App\Models\Testimonial;
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
});

Route::get('/base', function () {
    return view('base');
});
////////////////////////////////////////////////////////////////////////
//without controller
// Route::get('/index', function () {
//     return view('index');
// })->name('home');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/classes', function () {
//     return view('classes');
// })->name('classes');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

// Route::prefix('pages')->group(function () {
//     Route::get('schoolFacilities', function () {
//         return view('schoolFacilities');
//     })->name('facilities');
//     Route::get('teachers', function () {
//         return view('teachers');
//     })->name('teachers');
//     Route::get('becomeTeacher', function () {
//         return view('becomeTeacher');
//     })->name('becomeTeacher');
//     Route::get('appointment', function () {
//         return view('appointment');    
//     })->name('appointment');
//     Route::get('testimonial', function () {
//         return view('testimonial');    
//     })->name('testimonial');
// })->name('pages');

// Route::fallback(function () {
//     return view('404');
// })->name('404');


///////////////////////////////////////////////////////////////////////////////////////////
// with controller
Route::get('/index', [PageController::class, 'index'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/classes', [PageController::class, 'classes'])->name('classes');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('schoolFacilities', [PageController::class, 'schoolFacilities'])->name('facilities');

Route::get('teachers',  [PageController::class, 'teachers'])->name('teachers');

Route::get('becomeTeacher',  [PageController::class, 'becomeTeacher'])->name('becomeTeacher');

Route::get('appointment',  [PageController::class, 'appointment'])->name('appointment');

// Route::get('testimonial',  [PageController::class, 'testimonial'])->name('testimonial');

Route::fallback(PageController::class)->name('404');
///////////////////////////////////////////////////////////////////////////////////////////
//testimonial page
Route::get('testimonial',  [TestimonialController::class, 'index'])->name('testimonial');
Route::get('createtestimonial',  [TestimonialController::class, 'create'])->name('createTestimonial');
Route::post('storetestimonial',  [TestimonialController::class, 'store'])->name('storeTestimonial');

<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
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
Auth::routes(['verify'=>true]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
Route::get('/admin', [PageController::class, 'admin'])->name('admin');

Route::get('/home', [PageController::class, 'index'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

// Route::get('/classes', [PageController::class, 'classes'])->name('classes');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('schoolFacilities', [PageController::class, 'schoolFacilities'])->name('facilities');

// Route::get('teachers',  [PageController::class, 'teachers'])->name('teachers');

Route::get('becomeTeacher',  [PageController::class, 'becomeTeacher'])->name('becomeTeacher');

Route::get('appointment',  [PageController::class, 'appointment'])->name('appointment');

// Route::get('testimonial',  [PageController::class, 'testimonial'])->name('testimonial');

Route::fallback(PageController::class)->name('404');
///////////////////////////////////////////////////////////////////////////////////////////
//testimonial page
Route::get('testimonial',  [TestimonialController::class, 'index'])->name('testimonial');
Route::get('testimonialList',  [TestimonialController::class, 'list'])->name('testimonialList');
Route::get('createTestimonial',  [TestimonialController::class, 'create'])->name('createTestimonial');
Route::post('storeTestimonial',  [TestimonialController::class, 'store'])->name('storeTestimonial');
Route::get('editTestimonial/{id}',  [TestimonialController::class, 'edit'])->name('editTestimonial');
Route::put('updateTestimonial/{id}',  [TestimonialController::class, 'update'])->name('updateTestimonial');
Route::get('SdeleteTestimonial/{id}',  [TestimonialController::class, 'destroy'])->name('SdeleteTestimonial');
Route::get('trashTestimonial',  [TestimonialController::class, 'trash'])->name('trashTestimonial');
Route::get('FdeleteTestimonial/{id}',  [TestimonialController::class, 'forceDelete'])->name('FdeleteTestimonial');
Route::get('restoreTestimonial/{id}',  [TestimonialController::class, 'restore'])->name('restoreTestimonial');
Route::get('viewTestimonial/{id}',  [TestimonialController::class, 'show'])->name('viewTestimonial');
///////////////////////////////////////////////////////////////////////////////////////////
//appointment page
Route::get('appointmentList',  [AppointmentController::class, 'index'])->name('appointmentList');
Route::post('storeAppointment',  [AppointmentController::class, 'store'])->name('storeAppointment');
Route::get('SdeleteAppointment/{id}',  [AppointmentController::class, 'destroy'])->name('SdeleteAppointment');
Route::get('trashAppointment',  [AppointmentController::class, 'trash'])->name('trashAppointment');
Route::get('FdeleteAppointment/{id}',  [AppointmentController::class, 'forceDelete'])->name('FdeleteAppointment');
Route::get('restoreAppointment/{id}',  [AppointmentController::class, 'restore'])->name('restoreAppointment');
Route::get('viewAppointment/{id}',  [AppointmentController::class, 'show'])->name('viewAppointment');
///////////////////////////////////////////////////////////////////////////////////////////
//contactUs page
Route::get('contactUsList',  [ContactController::class, 'index'])->name('contactUsList');
Route::post('/contactSubmit', [ContactController::class, 'store'])->name('contactSubmit');
Route::get('viewContactUs/{id}',  [ContactController::class, 'show'])->name('viewContactUs');
Route::get('deleteContact/{id}',  [ContactController::class, 'destroy'])->name('deleteContact');
///////////////////////////////////////////////////////////////////////////////////////////
//teacher page
Route::get('teachers',  [TeacherController::class, 'index'])->name('teachers');
Route::get('teacherList',  [TeacherController::class, 'list'])->name('teacherList');
Route::get('createTeacher',  [TeacherController::class, 'create'])->name('createTeacher');
Route::post('storeTeacher',  [TeacherController::class, 'store'])->name('storeTeacher');
Route::get('editTeacher/{id}',  [TeacherController::class, 'edit'])->name('editTeacher');
Route::put('updateTeacher/{id}',  [TeacherController::class, 'update'])->name('updateTeacher');
Route::get('SdeleteTeacher/{id}',  [TeacherController::class, 'destroy'])->name('SdeleteTeacher');
Route::get('trashTeacher',  [TeacherController::class, 'trash'])->name('trashTeacher');
Route::get('FdeleteTeacher/{id}',  [TeacherController::class, 'forceDelete'])->name('FdeleteTeacher');
Route::get('restoreTeacher/{id}',  [TeacherController::class, 'restore'])->name('restoreTeacher');
Route::get('viewTeacher/{id}',  [TeacherController::class, 'show'])->name('viewTeacher');
///////////////////////////////////////////////////////////////////////////////////////////
//teacher page
Route::get('classes',  [SubjectController::class, 'index'])->name('classes');
// Route::get('teacherList',  [TeacherController::class, 'list'])->name('teacherList');
// Route::get('createTeacher',  [TeacherController::class, 'create'])->name('createTeacher');
// Route::post('storeTeacher',  [TeacherController::class, 'store'])->name('storeTeacher');
// Route::get('editTeacher/{id}',  [TeacherController::class, 'edit'])->name('editTeacher');
// Route::put('updateTeacher/{id}',  [TeacherController::class, 'update'])->name('updateTeacher');
// Route::get('SdeleteTeacher/{id}',  [TeacherController::class, 'destroy'])->name('SdeleteTeacher');
// Route::get('trashTeacher',  [TeacherController::class, 'trash'])->name('trashTeacher');
// Route::get('FdeleteTeacher/{id}',  [TeacherController::class, 'forceDelete'])->name('FdeleteTeacher');
// Route::get('restoreTeacher/{id}',  [TeacherController::class, 'restore'])->name('restoreTeacher');
// Route::get('viewTeacher/{id}',  [TeacherController::class, 'show'])->name('viewTeacher');

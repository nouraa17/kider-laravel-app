<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function admin()
    {
        return view('admin.dashboard');
    }
    public function index()
    {
        // $testimonials = Testimonial::get();
        $testimonials = Testimonial::where('published', true)->latest()->take(3)->get();
        $teachers = Teacher::get();
        return view('index', compact('testimonials','teachers'));
    }
    public function about()
    {
        $teachers = Teacher::get();
        return view('about', compact('teachers'));
    }
    // public function classes()
    // {
    //     $testimonials = Testimonial::where('published', true)->latest()->take(3)->get();
    //     $teachers = Teacher::get();
    //     return view('classes', compact('testimonials','teachers'));
    // }
    public function contact()
    {
        return view('contact');
    }
    public function schoolFacilities()
    {
        return view('schoolFacilities');
    }
    // public function teachers()
    // {
    //     return view('teachers');
    // }
    public function becomeTeacher()
    {
        return view('becomeTeacher');
    }
    public function appointment()
    {
        return view('appointment');
    }
    // public function testimonial()
    // {
    //     return view('testimonial');
    // }

    public function __invoke()
    {
        return view('404');
    }


}

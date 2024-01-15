<?php

namespace App\Http\Controllers;

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
        $testimonials = Testimonial::get();

        return view('index', compact('testimonials'));
    }
    public function about()
    { 
        return view('about');
    }
    public function classes()
    { 
        $testimonials = Testimonial::get();
        return view('classes', compact('testimonials'));
    }
    public function contact()
    { 
        return view('contact');
    }
    public function schoolFacilities()
    { 
        return view('schoolFacilities');
    }
    public function teachers()
    { 
        return view('teachers');
    }
    public function becomeTeacher()
    { 
        return view('becomeTeacher');
    }
    public function appointment()
    { 
        return view('appointment');
    }
    public function testimonial()
    { 
        return view('testimonial');
    }

    public function __invoke()
    {
        return view('404');
    }

    
}

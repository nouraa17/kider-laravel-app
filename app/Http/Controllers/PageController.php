<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    { 
        return view('index');
    }
    public function about()
    { 
        return view('about');
    }
    public function classes()
    { 
        return view('classes');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Traits\Common;

class TestimonialController extends Controller
{
    use Common;
    private $columns = [
        'name',
        'profession',
        'description',
        'image',
        'published'
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::get();
        return view('testimonial', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.addTestimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $messages = $this->messages();
        $testimonial = $request->validate([
            'name' => 'required|string|max:50',
            'profession' => 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'description' => 'required|string',
        ]); //

        $fileName = $this->uploadFile($request->image, 'assets/testimonialImages');
        $testimonial = $request->only($this->columns);
        $testimonial['published'] = isset($request->published);
        $testimonial['image'] = $fileName;
        Testimonial::create($testimonial);
        return redirect('testimonial');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

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
        // $testimonials = Testimonial::get();
        $testimonials = Testimonial::where('published', true)->latest()->take(3)->get();
        return view('testimonial', compact('testimonials'));
    }

    public function list()
    {
        $testimonials = Testimonial::get();
        return view('admin.testimonial.listTestimonial', compact('testimonials'));
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
        return redirect('createTestimonial')->with('success', 'Testimonial has been added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.viewTestimonial', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.editTestimonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimonial = $request->validate([
            'name' => 'required|string|max:50',
            'profession' => 'required|string',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'description' => 'required|string',
        ]); //
        $testimonial = $request->only($this->columns);
        // $fileName = $this->uploadFile($request->image, 'assets/testimonialImages');
        if ($request->hasFile('image')) {
            $fileName = $this->uploadFile($request->image, 'assets/testimonialImages');
            $testimonial['image'] = $fileName;
        }
        $testimonial['published'] = isset($request->published);
        Testimonial::where('id', $id)->update($testimonial);


        return redirect('editTestimonial/' . $id)->with('success', 'Testimonial has been updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::where('id', $id)->delete();
        return redirect('testimonialList');
    }
    // ///////////////////////////////////////////////////////////////////////////
    public function trash()
    {
        $testimonials = Testimonial::onlyTrashed()->get();
        return view('admin.testimonial.trashTestimonial', compact('testimonials'));
    }

    public function forceDelete(string $id)
    {
        Testimonial::where('id', $id)->forceDelete();
        return redirect('testimonialList');
    }

    public function restore(string $id)
    {
        Testimonial::where('id', $id)->restore();
        return redirect('testimonialList');
    }
}

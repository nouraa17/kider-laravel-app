<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Traits\Common;


class SubjectController extends Controller
{
    use Common;

    private $columns = [
        'subjectName',
        'teacherId',
        'price',
        'age',
        'time',
        'capacity',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::get();
        $teachers = Teacher::get();
        $testimonials = Testimonial::where('published', true)->latest()->take(3)->get();

        return view('classes', compact('subjects','teachers','testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

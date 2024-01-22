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
        'image',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::get();
        $teachers = Teacher::get();
        $testimonials = Testimonial::where('published', true)->latest()->take(3)->get();

        return view('classes', compact('subjects', 'teachers', 'testimonials'));
    }

    public function list()
    {
        $teachers = Teacher::get();
        $subjects = Subject::get();
        return view('admin.subject.listSubject', compact('subjects','teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::get();

        return view('admin.subject.addSubject', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subject = $request->validate([
            'subjectName' => 'required|string|max:50',
            'teacherId' => 'required|numeric',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'price' => 'required|numeric',
            'age' => 'required|string',
            'capacity' => 'required|string',
            'time' => 'required|string',
        ]);
        $fileName = $this->uploadFile($request->image, 'assets/subjectImages');
        $subject = $request->only($this->columns);
        $subject['image'] = $fileName;
        Subject::create($subject);
        return redirect('createSubject')->with('success', 'Class has been added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subject = Subject::findOrFail($id);
        $teachers = Teacher::get();
        return view('admin.subject.viewSubject', compact('subject','teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teachers = Teacher::get();
        $subject = Subject::findOrFail($id);
        return view('admin.subject.editSubject', compact('subject','teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subject = $request->validate([
            'subjectName' => 'required|string|max:50',
            'teacherId' => 'required|numeric',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'price' => 'required|numeric',
            'age' => 'required|string',
            'capacity' => 'required|string',
            'time' => 'required|string',
        ]); //
        $subject = $request->only($this->columns);
        if ($request->hasFile('image')) {
            $fileName = $this->uploadFile($request->image, 'assets/subjectImages');
            $subject['image'] = $fileName;
        }
        Subject::where('id', $id)->update($subject);

        return redirect('editSubject/' . $id)->with('success', 'Class has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Subject::where('id', $id)->delete();
        return redirect('subjectList');
    }
    // ///////////////////////////////////////////////////////////////////////////
    public function trash()
    {
        $teachers = Teacher::get();
        $subjects = Subject::onlyTrashed()->get();
        return view('admin.subject.trashSubject', compact('subjects','teachers'));
    }

    public function forceDelete(string $id)
    {
        Subject::where('id', $id)->forceDelete();
        return redirect('subjectList');
    }

    public function restore(string $id)
    {
        Subject::where('id', $id)->restore();
        return redirect('subjectList');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Traits\Common;


class TeacherController extends Controller
{
    use Common;

    private $columns = [
        'fullName',
        'designation',
        'image',
        'fb',
        'tw',
        'inst',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::get();
        return view('teachers', compact('teachers'));
    }

    public function list()
    {
        $teachers = Teacher::get();
        return view('admin.teacher.listTeacher', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teacher.addTeacher');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teacher = $request->validate([
            'fullName' => 'required|string|max:50',
            'designation' => 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'fb' => 'required|string',
            'tw' => 'required|string',
            'inst' => 'required|string',

        ]); //

        $fileName = $this->uploadFile($request->image, 'assets/teacherImages');
        $teacher = $request->only($this->columns);
        $teacher['image'] = $fileName;
        Teacher::create($teacher);
        return redirect('createTeacher')->with('success', 'Teacher has been added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teacher.viewTeacher', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teacher.editTeacher', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teacher = $request->validate([
            'fullName' => 'required|string|max:50',
            'designation' => 'required|string',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'fb' => 'required|string',
            'tw' => 'required|string',
            'inst' => 'required|string',
        ]); //
        $teacher = $request->only($this->columns);
        // $fileName = $this->uploadFile($request->image, 'assets/testimonialImages');
        if ($request->hasFile('image')) {
            $fileName = $this->uploadFile($request->image, 'assets/teacherImages');
            $teacher['image'] = $fileName;
        }
        Teacher::where('id', $id)->update($teacher);


        return redirect('editTeacher/' . $id)->with('success', 'Teacher has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::where('id', $id)->delete();
        return redirect('teacherList');
    }
    // ///////////////////////////////////////////////////////////////////////////
    public function trash()
    {
        $teachers = Teacher::onlyTrashed()->get();
        return view('admin.teacher.trashTeacher', compact('teachers'));
    }

    public function forceDelete(string $id)
    {
        Teacher::where('id', $id)->forceDelete();
        return redirect('teacherList');
    }

    public function restore(string $id)
    {
        Teacher::where('id', $id)->restore();
        return redirect('teacherList');
    }
}

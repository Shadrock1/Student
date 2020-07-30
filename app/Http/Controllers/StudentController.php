<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Group;
use App\Models\Subject;

use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use App\Http\Requests\Student\MarkStoreRequest;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(5);

        return view('students.index', compact('students'));
    }

    public function create(Student $student)
    {
       $groups = Group::all();

        return view('students.create', compact('groups', 'student'));
    }

    public function store(StoreRequest $request)
    {
       Student::create($request->validated());

        return redirect()->route('students.index');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        $groups =Group::all();
        return view('students.edit', compact('groups', 'student'));
    }


    public function update(UpdateRequest $request, Student $student)
    {
        $student->update($request->validated());

        return redirect()->route('students.index');

    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index');
    }
}

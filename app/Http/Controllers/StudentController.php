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

        $group = $student->group;
        $subjects =$student->subjects;

        return view('students.show', compact('student', 'subjects', 'group'));
    }

    public function edit(Student $student)
    {
        $groups = Group::all();

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

    public function markCreate(Student $student)
    {
        $subjects = Subject::all();

        return view('marks.create', compact('student', 'subjects'));
    }

    public function markStore(MarkStoreRequest $request, Student $student)
    {
       $data = $request->validated();
       $student->subjects()->attach($data['subject_id'], ['mark' => $data['mark']]);

       return redirect()->route('students.show', $student);
    }

    public function markEdit(Student $student, Subject $subject)
    {
        return view('marks.edit', compact('student', 'subject'));
    }

    public function markUpdate(Request $request, Student $student, Subject $subject)
    {
        $student->subjects()->syncWithoutDetaching([$subject->id => ['mark' => $request->mark]]);

        return redirect()->route('students.show', $student);
    }

}

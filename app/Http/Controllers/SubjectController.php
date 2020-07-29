<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Http\Requests\Subject\StoreRequest;
use App\Http\Requests\Subject\UpdateRequest;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();

        return view('subjects.index', compact('subjects'));
    }

    public function create()
    {
        $subject = new Subject();

        return view('subjects.create', compact('subject'));
    }

    public function store(StoreRequest $request)
    {
        Subject::create($request->validated());

        return redirect()->route('subjects.index');
    }

    public function edit(Subject $subject)
    {
        return view('subjects.edit', compact('subject'));
    }

    public function update(UpdateRequest $request, Subject $subject)
    {
        $data = ($request->validated());
        $subject->fill($data);
        $subject->save();

        return redirect()->route('subjects.index');

    }

    public function destroy(Subject $subject)
    {
        Subject::destroy($subject->id);

        return redirect()->route('subjects.index');
    }
}

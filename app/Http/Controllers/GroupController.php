<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Requests\Group\StoreRequest;
use Illuminate\Http\Request;


class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::paginate(5);

        return view('groups.index', compact('groups'));
    }

    public function create()
    {
        $group = new Group();

        return view('groups.create', compact('group'));
    }

    public function store(StoreRequest $request)
    {
        Group::create($request->validated());

        return redirect()->back();
    }

    public function show()
    {

    }

    public function edit()
    {

    }


    public function update()
    {

    }

    public function destroy()
    {

    }
}

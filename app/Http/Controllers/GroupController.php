<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Requests\Group\StoreRequest;
use App\Http\Requests\Group\UpdateRequest;
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

        return redirect()->route('groups.index');
    }

    public function show(Group $group)
    {
        return view('groups.show', compact('group'));
    }

    public function edit(Group $group)
    {
        return view('groups.edit', compact('group'));
    }


    public function update(UpdateRequest $request, Group $group)
    {
       $data = ($request->validated());
       $group->fill($data);
       $group->save();

        return redirect()->route('groups.index');

    }

    public function destroy(Group $group)
    {
        Group::destroy($group->id);

        return redirect()->route('groups.index');
    }
}

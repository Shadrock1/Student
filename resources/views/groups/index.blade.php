@extends('layouts.app')

@section('main')

    <div class="row ">
        <div class="blog-post">
            <div class="col-md-8 blog-main p-3">
                @foreach($groups as $group)
                    <h2 class="blog-post-title text-info">{{$group->name}}</h2>
                @endforeach
            </div>
        </div>
        <a href="{{route('groups.create')}}">Create</a>
    </div>

@endsection

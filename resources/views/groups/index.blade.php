@extends('layouts.app')

@section('main')

    <div class="row ">
        <div class="blog-post">
            <div class="col-md-8 blog-main p-3">
                @foreach($groups as $group)
                    <h2 class="blog-post-title text-info">{{$group->name}}</h2>
                    <a href="{{route('groups.edit', $group->id)}}">Update</a>
                    <form action="{{ route('groups.destroy', $group->id) }}" method="POST">
                        <input name="_method" type="hidden" value="DELETE">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i>Delete
                        </button>
                    </form>
                @endforeach
            </div>
        </div>
        <a href="{{route('groups.create')}}">Create</a>
    </div>

@endsection

@extends('layouts.app')

@section('main')

    <div class="container col-8" >
        <div class="blog-post">
            <div class="col-md-8 blog-main p-3">
                <a href="{{route('groups.create')}}">Create</a>
                @foreach($groups as $group)
                    <table class="table">
                    <tr>
                        <td><a href="{{route('groups.show', $group->id)}}">{{$group->name}}</a></td>
                        <td><a href="{{route('groups.edit', $group->id)}}">Edit</td>
                        <td>
                            <form action="{{ route('groups.destroy', $group->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-sm btn-outline-danger p-1 ml-1">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    </table>
                @endforeach
            </div>
        </div>
     {{ $groups }}
@endsection

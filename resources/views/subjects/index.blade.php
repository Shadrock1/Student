@extends('layouts.app')

@section('main')
    <div class="container col-8" >
        <div class="blog-post">
            <div class="col-md-8 blog-main p-3">
                <a href="{{route('subjects.create')}}">Create</a>
                @foreach($subjects as $subject)
                    <table class="table">
                    <tr>
                        <td><a>{{$subject->name}}</a></td>
                        <td><a href="{{route('subjects.edit', $subject->id)}}">Edit</td>
                        <td>
                            <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST">
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
@endsection

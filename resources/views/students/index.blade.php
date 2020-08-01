@extends('layouts.app')

@section('main')
    <div class="container col-8" >
        <div class="blog-post">
            <div class="col-md-8 blog-main p-3">
                <a href="{{route('students.create')}}">Create</a>
                @foreach($students as $student)
                    <table class="table">
                    <tr>
                        <td><a href="{{route('students.show', $student)}}">{{$student->name}}</a></td>
                        <td>{{$student->birthday}}</td>
                        <td><a href="{{route('students.edit', $student)}}">Edit</a></td>
                        <td>
                            <form action="{{ route('students.destroy', $student) }}" method="POST">
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

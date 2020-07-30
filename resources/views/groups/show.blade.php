@extends('layouts.app')

@section('main')
    <div class="container col-8" >
        <div class="blog-post">
            <div class="col-md-8 blog-main p-3">
                @foreach($students as $student)
                    <table class="table">
                        <tr>
                            <td><a href="{{route('students.show', $student->id)}}">{{$student->name}}</a></td>
                        </tr>
                    </table>
                @endforeach
            </div>
        </div>
@endsection

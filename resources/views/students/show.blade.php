@extends('layouts.app')

@section('main')
    <div class="container col-8" >
        <div class="blog-post">
            <div class="col-md-8 blog-main p-3">
                <h5>{{ $student->name }}</h5>
                <h6>{{ $group->name }}</h6>
                <table class="table">
                    <tr>
                        <th>Subjects</th>
                        <th>Marks</th>
                        <th></th>
                    </tr>
                @foreach($subjects as $subject)
                        <tr>
                            <td>{{ $subject->name }}</td>
                            <td>{{ $subject->pivot->mark }}</td>
                            <td><a href="{{ route('marks.edit', [$student, $subject]) }}">Edit</a></td>
                        </tr>
                @endforeach
                </table>
            </div>
        </div>
@endsection

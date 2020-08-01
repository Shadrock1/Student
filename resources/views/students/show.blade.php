@extends('layouts.app')

@section('main')
    <div class="container col-8" >
        <div class="blog-post">
            <div class="col-md-8 blog-main p-3">
                <h5>{{ $student->name }}</h5>
                @foreach($subjects as $subject)
                    <table class="table">
                        <tr>
                            <td>{{ $subject->name }}</td>
                        </tr>
                    </table>
                @endforeach
            </div>
        </div>
@endsection

@extends('layouts.app')

@section('main')
    <div class="form-group d-flex justify-content-center">
    {{ Form::model($student, ['url' => route('students.update', $student), 'method' => 'PATCH']) }}
    @include('students.form')
    </div>
@endsection

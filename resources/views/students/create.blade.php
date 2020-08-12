@extends('layouts.app')

@section('main')
    <div class="form-group d-flex justify-content-center">
    {{ Form::model($student, ['url' => route('students.store')]) }}
   @include('students.form')
    </div>
@endsection


@extends('layouts.app')

@section('main')
    <div class="form-group d-flex justify-content-center">
        {{ Form::model($student, ['url' => route('marks.update', [$student, $subject]), 'method' => 'PUT']) }}
        {{ Form::label('mark', 'Mark') }}<br>
        {{ Form::text('mark') }}<br>
        {{ Form::submit('Save') }}
        {{ Form::close() }}
    </div>
@endsection

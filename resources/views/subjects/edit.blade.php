@extends('layouts.app')

@section('main')
    {{ Form::model($subject, ['url' => route('subjects.update', $subject), 'method' => 'PATCH']) }}
    {{ Form::label('name', 'Название') }}<br>
    {{ Form::text('name') }}<br>
    {{ Form::submit('Save') }}
    {{ Form::close() }}
@endsection

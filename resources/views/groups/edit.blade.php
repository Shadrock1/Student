@extends('layouts.app')

@section('main')
    {{ Form::model($group, ['url' => route('groups.update', $group), 'method' => 'PATCH']) }}
    {{ Form::label('name', 'Название') }}<br>
    {{ Form::text('name') }}<br>
    {{ Form::submit('Save') }}
    {{ Form::close() }}
@endsection

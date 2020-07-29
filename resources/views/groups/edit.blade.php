@extends('layouts.app')

@section('main')
    {{ Form::model($group, ['url' => route('groups.update', $group), 'method' => 'PATCH']) }}

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::label('name', 'Название') }}<br>
    {{ Form::text('name') }}<br>
    {{ Form::submit('Save') }}
    {{ Form::close() }}
@endsection

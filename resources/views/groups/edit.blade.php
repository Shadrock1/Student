@extends('layouts.app')

@section('main')
    <div class="form-group d-flex justify-content-center">
    {{ Form::model($group, ['url' => route('groups.update', $group), 'method' => 'PATCH']) }}
    @include('groups.form')
    </div>
@endsection

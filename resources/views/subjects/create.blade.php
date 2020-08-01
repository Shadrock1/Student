@extends('layouts.app')

@section('main')
    <div class="form-group d-flex justify-content-center">
    {{ Form::model($subject, ['url' => route('subjects.store')]) }}
    @include('subjects.form')
    </div>
@endsection

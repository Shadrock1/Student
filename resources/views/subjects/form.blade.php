@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="form-group d-flex justify-content-center">
        {{ Form::model($subject, ['url' => route('subjects.store')]) }}
        {{ Form::label('name', 'Название') }}<br>
        {{ Form::text('name') }}<br>
        {{ Form::submit('Save') }}
        {{ Form::close() }}
    </div>

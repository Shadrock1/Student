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
    {{ Form::model($group, ['url' => route('groups.store')]) }}
    {{ Form::label('name', 'Name') }}</br>
    {{ Form::text('name') }}
    {{ Form::submit('Save') }}
    {{ Form::close() }}
</div>


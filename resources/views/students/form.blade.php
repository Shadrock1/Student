@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
    {{ Form::label('name', 'Name') }}<br>
    {{ Form::text('name') }}<br>
    {{ Form::label('birthday', 'Birthday') }}<br>
    {{ Form::date('birthday') }}<br>
    <select class="form-control" id="group_id" name="group_id">
        @foreach($groups as $group)
            <option value="{{ $group->id }}">
                {{ $group->id }} . {{ $group->name }}
            </option>
        @endforeach
    </select>
    {{ Form::submit('Save') }}
    {{ Form::close() }}
</div>


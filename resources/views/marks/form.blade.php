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
    {{ Form::label('mark', 'Mark') }}<br>
    {{ Form::text('mark') }}<br>
    <select class="form-control" id="subject_id" name="subject_id">
        @foreach($subjects as $subject)
            <option value="{{ $subject->id }}">
                {{ $subject->id }} . {{ $subject->name }}
            </option>
        @endforeach
    </select>
    {{ Form::submit('Save') }}
    {{ Form::close() }}
</div>

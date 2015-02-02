<ul>
    <li>
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name') }}
        {{ $errors->first('name', '<p class="error">:message</p>') }}
    </li>
    <li>
        {{ Form::submit('Save') }}
    </li>
</ul>
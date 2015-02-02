<ul>
    <li>
        {{ Form::label('brand_id', 'Brand') }}
        {{ Form::select('brand_id', Brand::lists('name', 'id')) }}
        {{ $errors->first('brand_id', '<p class="error">:message</p>') }}
    </li>
    <li>
        {{ Form::label('category_id', 'Category') }}
        {{ Form::select('category_id', Category::lists('name', 'id')) }}
        {{ $errors->first('category_id', '<p class="error">:message</p>') }}
    </li>
    <li>
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title') }}
        {{ $errors->first('title', '<p class="error">:message</p>') }}
    </li>
    <li>
        {{ Form::label('subtitle', 'Sub Title') }}
        {{ Form::text('subtitle') }}
        {{ $errors->first('subtitle', '<p class="error">:message</p>') }}
    </li>
    <li>
        {{ Form::label('price', 'Price') }}
        {{ Form::text('price') }}
        {{ $errors->first('price', '<p class="error">:message</p>') }}
    </li>
    <li>
        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body') }}
        {{ $errors->first('body', '<p class="error">:message</p>') }}
    </li>
    <li>
        {{ Form::submit('Save') }}
    </li>
</ul>
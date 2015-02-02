@extends('admin._layouts.admin')

@section('content')

<h1>Categories</h1>
{{ link_to_route('admin.categories.create', 'Create new Product') }}

@if(count($categories))
    <ul>
    @foreach($categories as $category)
        <li>
            {{ link_to_route('admin.categories.edit', $category->name, array($category->id)) }}
            {{ Form::open(array('route' => array('admin.categories.destroy', $category->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete') }}
            {{ Form::close() }}
        </li>
    @endforeach
    </ul>
@endif

@stop
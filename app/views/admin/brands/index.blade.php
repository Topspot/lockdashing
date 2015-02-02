@extends('admin._layouts.admin')

@section('content')

<h1>Brands</h1>
{{ link_to_route('admin.brands.create', 'Create new Brand') }}

@if(count($brands))
    <ul>
    @foreach($brands as $brand)
        <li>
            {{ link_to_route('admin.brands.edit', $brand->name, array($brand->id)) }}
            {{ Form::open(array('route' => array('admin.brands.destroy', $brand->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete') }}
            {{ Form::close() }}
        </li>
    @endforeach
    </ul>
@endif

@stop
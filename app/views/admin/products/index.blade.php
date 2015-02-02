@extends('admin._layouts.admin')

@section('content')

<h1>Products</h1>
{{ link_to_route('admin.products.create', 'Create new Product') }}

@if(count($products))
    <ul>
    @foreach($products as $product)
        <li>
            {{ link_to_route('admin.products.edit', $product->title, array($product->id)) }}
            {{ Form::open(array('route' => array('admin.products.destroy', $product->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete') }}
            {{ Form::close() }}
        </li>
    @endforeach
    </ul>
@endif

@stop
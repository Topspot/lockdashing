@extends('admin._layouts.admin')

@section('content')

<h1>Create Products</h1>
{{ Form::open(array('route' => 'admin.products.store')) }}
    @include('admin.products._partials.form')
{{ Form::close() }}
@stop
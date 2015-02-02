@extends('admin._layouts.admin')

@section('content')

<h1>Edit Brands</h1>
    {{ Form::model($brand, array('route' => array('admin.brands.update', $brand->id), 'method' => 'put')) }}
        @include('admin.brands._partials.form')
    {{ Form::close() }}
@stop
@extends('admin._layouts.admin')

@section('content')

<h1>Create Brands</h1>
{{ Form::open(array('route' => 'admin.brands.store')) }}
    @include('admin.brands._partials.form')
{{ Form::close() }}
@stop
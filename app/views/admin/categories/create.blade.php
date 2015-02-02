@extends('admin._layouts.admin')

@section('content')

<h1>Create Categories</h1>
{{ Form::open(array('route' => 'admin.categories.store')) }}
    @include('admin.categories._partials.form')
{{ Form::close() }}
@stop
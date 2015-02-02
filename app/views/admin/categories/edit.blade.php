@extends('admin._layouts.admin')

@section('content')

<h1>Edit Category</h1>
    {{ Form::model($category, array('route' => array('admin.categories.update', $category->id), 'method' => 'put')) }}
        @include('admin.categories._partials.form')
    {{ Form::close() }}
@stop
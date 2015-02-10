@extends('laravel-authentication-acl::admin.layouts.base')

@section('content')

<h1>Brands</h1>
{{ link_to_route('admin.brands.create', 'Create new Brand') }}
<div class="row">
        <div class="col-xs-12">
                <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                <thead>
                                        <tr>
                                                <th class="center">
                                                        <label>
                                                                <input type="checkbox" class="ace" />
                                                                <span class="lbl"></span>
                                                        </label>
                                                </th>
                                                <th>Name</th>
                                                <th></th>
                                        </tr>
                                </thead>

                                <tbody>
                                    @if(count($brands))
                                     @foreach($brands as $brand)
                                        <tr>
                                                <td class="center">
                                                        <label>
                                                                <input type="checkbox" class="ace" />
                                                                <span class="lbl"></span>
                                                        </label>
                                                </td>

                                                <td>
<!--                                                        <a href="#">app.com</a>-->
                                                        {{{ $brand->name }}}
                                                </td>

                                                <td>
                                                        <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                                
                                                                <a class="green" href="/admin/brands/<?php echo $brand->id ?>/edit">
                                                                        <i class="icon-pencil bigger-130"></i>
                                                                </a>

                                                                <a class="red" href="/admin/brands/destroy/<?php echo $brand->id ?>">
                                                                        <i class="icon-trash bigger-130"></i>
                                                                </a>
                                                        </div>

                                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                                <div class="inline position-relative">
                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                                                <i class="icon-caret-down icon-only bigger-120"></i>
                                                                        </button>

                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                                                <li>
                                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                <span class="blue">
                                                                                                        <i class="icon-zoom-in bigger-120"></i>
                                                                                                </span>
                                                                                        </a>
                                                                                </li>

                                                                                <li>
                                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                <span class="green">
                                                                                                        <i class="icon-edit bigger-120"></i>
                                                                                                </span>
                                                                                        </a>
                                                                                </li>

                                                                                <li>
                                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                <span class="red">
                                                                                                        <i class="icon-trash bigger-120"></i>
                                                                                                </span>
                                                                                        </a>
                                                                                </li>
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </td>
                                        </tr>       
                                           @endforeach
                                        @endif
                                        
                                </tbody>
                        </table>
                </div>
        </div>
</div>
<!--@if(count($brands))
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
@endif-->

@stop
@extends('layouts.admin.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-plus fa-fw"></i> Create New Product</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-archive fa-fw"></i> Create New Product
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    @include('admin.partials.products.edit-product', ['product' => $product])
                </div>
            </div>
        </div>
    </div>

@endsection
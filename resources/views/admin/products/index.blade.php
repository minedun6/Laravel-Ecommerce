@extends('layouts.admin.app')

@section('content')

  <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> <i class="fa fa-list fa-fw"></i> Products</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-archive fa-fw"></i> Products
                </div>
                <div class="panel-body">
                    <div class="">
                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary"> <i class="fa fa-plus fw"></i> New Product</a>
                    </div>
                    &nbsp;
                    <div class="dataTable_wrapper">
                        <table id="products-table" width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Product Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $key => $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ str_limit($product->description, 100)  }}</td>
                                        <td><a href="{{ $product->img }}" target="_blank" class="btn btn-info"> <i class="fa fa-eye fw"></i> Preview</a></td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="/js/products-table.js"></script>
@endsection

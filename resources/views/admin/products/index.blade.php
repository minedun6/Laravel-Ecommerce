@extends('layouts.admin.app')


@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-list fa-fw"></i> Products</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            @include('flash::message')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-archive fa-fw"></i> Products
                </div>
                <div class="panel-body">
                    <div class="">
                        <a href="{{ route('admin.products.create') }}" class="btn btn-default"> <i
                                    class="fa fa-plus fw"></i> New Product</a>
                    </div>
                    &nbsp;
                    <div class="dataTable_wrapper">
                        <table id="products-table" width="100%" class="table table-striped table-bordered table-hover"
                               id="dataTables-example">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Avilability</th>
                                <th>Price</th>
                                <th>Product Image</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $key => $product)
                                <tr>
                                    <td align="center">{{ $product->id }}</td>
                                    <td align="center">{{ $product->title }}</td>
                                    <td align="center">
                                        <span class="label label-default">{{ $product->category->name }}</span>
                                    </td>
                                    <td align="center">
                                        <span class="label label-primary">{{ $product->qty }}</span>
                                    </td>
                                    <td align="center">
                                        @if( $product->qty > 0 )
                                            <span class="label label-success">Available in Stock</span>
                                        @else
                                            <span class="label label-danger">Unavailable in Stock</span>
                                        @endif
                                    </td>
                                    <td align="center"> $ {{ $product->price }}</td>
                                    <td align="center">
                                        <?php $photo = strstr($product->img, "http://") ? $product->img : 'uploads/' . $product->img  ?>
                                        <a href="#" data-title="{{ $product->title }}"
                                           data-href="{{ asset($photo) }}"
                                           class="btn btn-circle btn-info fancybox" rel="ligthbox">
                                            <i class="fa fa-search fa-fw"> View</i>
                                        </a>
                                    </td>
                                    <td align="center">
                                        {!! Form::open(['route' => ['admin.products.destroy', $product->id], 'method' => 'DELETE']) !!}
                                        <div class="btn-toolbargroup" role="group">
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.products.edit', $product->id) }}"
                                                   class="btn btn-circle btn-warning">
                                                    <i class="fa fa-edit fa-fw"></i>
                                                </a>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button type="submit" href="{{ $product->img }}"
                                                        class="btn btn-circle btn-danger"
                                                        title="Delete Product"
                                                        onclick="return confirm('Are you sure to delete this article ?')">
                                                    <i class="fa fa-trash-o fa-fw"></i>
                                                </button>
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                    </td>
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
    {!! Html::script('js/products-table.js') !!}
@endsection

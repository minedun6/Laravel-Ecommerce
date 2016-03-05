@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <div class="row">
                            <div class="col-xs-10">
                                <h5>
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @foreach(Cart::contents() as $product_item)
                        <div class="row">
                            <div class="col-xs-2">
                                <img class="img-responsive" src="{{ $product_item->image }}" width="100" height="70">
                            </div>
                            <div class="col-xs-4">
                                <h4 class="product-name">
                                    <strong>{{ $product_item->name }}</strong>
                                </h4>
                                <h4>
                                    <small>{{ $product_item->description }} ...</small>
                                </h4>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-6 text-right">
                                    <h6>
                                        <strong> {{ $product_item->price }}
                                            <span class="text-muted"> x </span>
                                        </strong>
                                    </h6>
                                </div>
                                <div class="col-xs-4">
                                    {!! Form::open(['route' => 'updateCart']) !!}
                                        <input type="hidden" name="productIdentifier" value="{{ $product_item->identifier }}" />
                                        <input name="qty" type="text" class="form-control input-sm qty" value="{{ $product_item->quantity }}">
                                    {!! Form::close() !!}
                                </div>
                                <div class="col-xs-2">
                                    {!! Form::open(['route' => 'removeFromCart']) !!}
                                        <input type="hidden" name="productIdent" value="{{ $product_item->identifier }}" />
                                        <button type="submit" class="btn btn-link btn-xs remove-cart">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </button>
                                    {{ Form::close()}}
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                    <div class="row">
                        <div class="text-center">
                            <div class="col-xs-9">
                                <h6 class="text-right">Subtotal</h6>
                            </div>
                            <div class="col-xs-3">
                                {{ Cart::totalWithoutTax() }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center">
                            <div class="col-xs-9">
                                <h6 class="text-right">Estimated shipping</h6>
                            </div>
                            <div class="col-xs-3">
                                {{ Cart::tax() }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center">
                            <div class="col-xs-9">
                                <h2 class="text-right">Total</h2>
                            </div>
                            <div class="col-xs-3">
                                <h2>{{ Cart::total() }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row text-center">
                        <div class="col-xs-3 col-xs-offset-7">
                            <button type="button" class="btn btn-block">
                                <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                            </button>
                        </div>
                        <div class="col-xs-2">
                            <button type="button" class="btn btn-success btn-block">
                                Checkout
                                <span class="glyphicon glyphicon-credit-card"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

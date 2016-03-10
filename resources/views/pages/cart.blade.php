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
                                    <span class="fa fa-shopping-cart fa-fw"></span> Shopping Cart
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @unless(count(Cart::contents()) != 0)
                        <div class="row">
                            <div class="text-center">
                                <div class="col-xs-12">
                                    <h4 class="text-center"> There is no items in your shopping cart </h4>
                                </div>
                            </div>
                        </div>
                    @endunless
                        @foreach(Cart::contents() as $product_item)
                            <div class="row">
                                <div class="col-xs-2">
                                    <img class="img-responsive" src="{{ asset('uploads/'.$product_item->image) }}"
                                         width="150" height="100">
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
                                        <input name="qty" type="text" class="form-control input-sm qty"
                                               value="{{ $product_item->quantity }}" data-value="{{ $product_item->identifier }}" />
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="col-xs-2">
                                        {!! Form::open(['route' => 'removeFromCart']) !!}
                                        <input type="hidden" name="productIdent" value="{{ $product_item->identifier }}"/>
                                        <button type="submit" class="btn btn-danger btn-sm remove-cart">
                                            <span class="fa fa-trash-o fa-fw"></span>
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
                               $ {{ Cart::totalWithoutTax() }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center">
                            <div class="col-xs-9">
                                <h6 class="text-right">Estimated shipping</h6>
                            </div>
                            <div class="col-xs-3">
                               $ {{ Cart::tax() }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center">
                            <div class="col-xs-9">
                                <h2 class="text-right">Total</h2>
                            </div>
                            <div class="col-xs-3">
                                <h2> $ {{ Cart::total() }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row text-center">
                        <div class="col-xs-3 col-xs-offset-7">
                            <button type="button" class="btn btn-block">
                                <span class="fa fa-shopping-cart fa-fw"></span> Continue Shopping
                            </button>
                        </div>
                        <div class="col-xs-2">
                            <button type="button" class="btn btn-success btn-block">
                                Checkout
                                <span class="fa fa-credit-card fa-fw"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

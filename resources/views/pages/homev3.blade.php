@extends('layouts.app')

@section('content')

    @foreach($categories as $category)
        <div class="row">
            <div class="row">
                <div class="col-md-9">
                    <h3>{{ $category->name }}</h3>
                </div>
                <div class="col-md-3">
                    <!-- Controls -->
                    <div class="controls pull-right hidden-xs">
                        <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example-{{ $category->id }}"
                           data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success"
                                                    href="#carousel-example-{{ $category->id }}"
                                                    data-slide="next"></a>
                    </div>
                </div>
            </div>
            <div id="carousel-example-{{ $category->id }}" class="carousel slide hidden-xs" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach (array_chunk($category->products->all(),4) as $key => $row)
                        <div class="item {{ $key == 0 ? 'active' : ''}}">
                            <div class="row">
                                @foreach($row as $product)
                                    @include('partials.product-item', ['product' => $product])
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach


@endsection
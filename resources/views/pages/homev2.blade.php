@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3>
                    Carousel Product Cart Slider</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                       data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success"
                                                href="#carousel-example"
                                                data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach (array_chunk($products->all(),4) as $key => $row)
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

@endsection

<div class="col-sm-3">
    <div class="col-item">
        <div class="photo">
            <img src="{{$product->img}}" class="img-responsive" alt="{{$product->title}}" />
        </div>
        <div class="info">
            <div class="row">
                <div class="price col-md-7">
                    <h6> {{$product->title}} </h6>
                    <h5 class="price-text-color">
                        $ {{$product->price}}</h5>
                </div>
                <div class="rating hidden-sm col-md-5">
                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                    </i><i class="fa fa-star"></i>
                </div>
            </div>
            <div class="separator clear-left">
                {!! Form::open(['route' => 'addToCart']) !!}
                    {!! Form::hidden('quantity', 1) !!}
                    {!! Form::hidden('productId', $product->id) !!}
                    <p class="btn-add">
                        <i class="fa fa-shopping-cart"></i>
                        <button type="submit" class="btn-link hidden-sm">Add to Cart</button>
                    </p>
                {!! Form::close() !!}
                <p class="btn-details">
                    <i class="fa fa-list"></i><a href="" class="hidden-sm">More details</a></p>
            </div>
            <div class="clearfix">
            </div>
        </div>
    </div>
</div>

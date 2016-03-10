<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span
                class="glyphicon glyphicon-shopping-cart"></span> {{ Cart::totalItems() }} item(s)
        | {{ Cart::total() }} &dollar; <span class="caret"></span></a>
    <ul class="dropdown-menu dropdown-cart" role="menu">
        @unless(count(Cart::contents()) != 0)
            <div class="text-center">
                No Items in your cart !!
            </div>
        @endunless
            @if (!is_null(Cart::contents()))
                @foreach (Cart::contents() as $cart_item)
                    <li>
                    <span class="item">
                        <span class="item-left">
                            <img src="{{ asset('uploads/'.$cart_item->image) }}" height="50" width="50"
                                 alt="{{ $cart_item->name }}"/>
                            <span class="item-info">
                                <span> {{ $cart_item->quantity }} x {{ $cart_item->name }}</span>
                                <span>{{ $cart_item->price }} &dollar;</span>
                            </span>
                        </span>
                        <span class="item-right">
                            <button class="btn btn-xs btn-danger pull-right">x</button>
                        </span>
                    </span>
                    </li>
                @endforeach
            @endif
        <li class="divider"></li>
        <li><a class="text-center" href="{{ route('cart') }}"><i class="fa fa-shopping-cart fa-fw"></i> View Cart </a></li>
    </ul>
</li>

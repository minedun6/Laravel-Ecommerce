@extends('layouts.app')

@section('content')

  <h2 class="title-header">List of Products</h2>
  @foreach (array_chunk($products->all(),4) as $row)
  <div class="item">
    <div class="row">
        @foreach ($row as $product)
            @include('partials.product-item', compact('product'))
        @endforeach
    </div>
  </div>
  <br/>
  @endforeach

  {!! $products->links() !!}

@endsection

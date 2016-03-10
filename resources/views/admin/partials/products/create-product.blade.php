@section('styles')
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css') !!}
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/css/select2.min.css') !!}
@endsection

{!! Form::model($product, ['files' => true, 'route' => 'admin.products.store', 'class' => 'form-horizontal']) !!}

@include('admin.partials.products.form-product')

{!! Form::close() !!}

@section('scripts')
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/js/select2.min.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js') !!}
    {!! Html::script('js/create-product.js') !!}
@endsection
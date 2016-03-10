<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME', 'Ecommerce')}}</title>
    {!! Html::style('https://fonts.googleapis.com/css?family=Lato:100,300,400,700') !!}
    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')!!}
    {!! Html::style('plugins/metisMenu/dist/metisMenu.min.css')!!}
    {!! Html::style('plugins/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') !!}
    {!! Html::style('//cdn.datatables.net/responsive/2.0.2/css/responsive.bootstrap.min.css') !!}
    {!! Html::style('css/sb-admin-2.css') !!}
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css') !!}
    {!! Html::style('plugins/fancybox/source/jquery.fancybox.css') !!}
    {!! Html::style('plugins/dropzone/dist/min/dropzone.min.css') !!}
    {!! Html::style('css/jquery.bootstrap-touchspin.min.css') !!}
    {{ Html::style('css/app.css') }}
    @yield('styles')
</head>

<body id="app-layout">
    <div id="wrapper">
        @include('layouts.admin.nav')
        <div id="page-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') !!}
    {!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') !!}
    {!! Html::script('/plugins/datatables/media/js/jquery.dataTables.min.js') !!}
    {!! Html::script('/plugins/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') !!}
    {!! Html::script('/plugins/datatables-responsive/js/dataTables.responsive.js') !!}
    {!! Html::script('/plugins/metisMenu/dist/metisMenu.min.js') !!}
    {!! Html::script('/js/sb-admin-2.js') !!}
    {!! Html::script('plugins/fancybox/source/jquery.fancybox.js') !!}
    {!! Html::script('plugins/dropzone/dist/min/dropzone.min.js') !!}
    {!! Html::script('js/jquery.bootstrap-touchspin.min.js') !!}
    @yield('scripts')
</body>
</html>

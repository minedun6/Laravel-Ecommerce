<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME', 'Ecommerce')}}</title>

    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css') !!}
    {!! Html::style('https://fonts.googleapis.com/css?family=Lato:100,300,400,700') !!}
    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
    {!! Html::style('css/jquery.bootstrap-touchspin.min.css') !!}
    {!! Html::style('css/app.css') !!}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    @include('layouts.top')
    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>

    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') !!}
    {!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') !!}
    {!! Html::script('js/jquery.matchHeight.js') !!}
    {!! Html::script('js/jquery.bootstrap-touchspin.min.js') !!}
    {!! Html::script('js/app.js') !!}
</body>
</html>

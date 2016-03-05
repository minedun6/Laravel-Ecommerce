<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME', 'Ecommerce')}}</title>
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="/plugins/datatables-plugin/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/plugins/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="/css/sb-admin-2.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
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

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="/plugins/datatables-responsive/js/dataTables.responsive.js"></script>
    <script src="/plugins/metisMenu/dist/metisMenu.min.js"></script>
    <script src="/js/sb-admin-2.js"></script>
    @yield('scripts')
</body>
</html>

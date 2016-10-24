<!DOCTYPE html>
<html lang="en" data-ng-app="powerPlantMall">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ elixir('css/powerplantmall.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="@if (Auth::guest()) login-page @else  hold-transition skin-blue-light sidebar-mini @endif ">
<div id="app" class="wrapper">
    @yield('content')
</div>
<!-- Scripts -->
<script src="/js/app.js"></script>
<script src="{{ elixir('js/powerplantmall.js') }}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $( function() {
        $( "#sortable1, #sortable2" ).sortable({
            connectWith: ".connectedSortable"
        }).disableSelection();
    } );
</script>
</body>
</html>

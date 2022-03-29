<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
    <!-- reponsive Core CSS -->
    <link href="{{URL::asset('css/responsive.css')}}" rel="stylesheet">

    <!-- MyStyle Core CSS -->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">

    <!-- Style Global Core CSS -->
    <link href="{{URL::asset('css/styleGlobal.css') }}" rel="stylesheet">
    <title>Sistema de Estacionamento</title>
</head>

<body>
    <div class="content">
        <!-- Navigation -->
        <nav class="nav bg-primary" style="padding-left: 15px;">
            <span class="navbar mb-0 h4 text-white">Estacionamento</span>
        </nav>
        <!--é colocado os códigos selecionados pelo section de cada página-->
        <div class="wrapper">
            @if (session('status'))
            <div class="alert alert-success margin-top-dez" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="view-wrapper">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
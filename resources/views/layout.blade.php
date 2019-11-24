<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
    <style>
        img, svg{
            width: 2rem;
        }
    </style>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>{{ __('words.lab') }} 1 - Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">{{ __('words.lab') }} 1</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">{{ __('words.home') }} </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('form.create') }}">{{ __('words.add_user') }}</a>
            </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ url('locale/en') }}" ><img src="{{ asset('img/en.png') }}" alt=""> EN</a></li>

                <li class="nav-item"><a class="nav-link" href="{{ url('locale/es') }}" ><img src="{{ asset('img/es.png') }}" alt=""> ES</a></li>
            </ul>

        </div>
    </nav>
    
    <div class="container">
        @yield('content')
    
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    </body>
</html>
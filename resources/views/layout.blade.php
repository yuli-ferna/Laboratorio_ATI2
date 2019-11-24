<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Laboratorio 1 - Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
 
    <div class="container">
        @yield('content')
    
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    </body>
</html>
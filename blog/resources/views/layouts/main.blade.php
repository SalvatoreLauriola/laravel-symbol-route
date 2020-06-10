<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    <header>
        <h1>Questo è il mio header</h1>
    </header>


    <body>
        @yield('content')
    </body>
    
    <footer>
        <h1>Questo è il mio footer</h1>
    </footer>

</html>

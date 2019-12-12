<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

   
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

</head>
<body>

    <header class="bg-light">
        <nav class="navbar navbar-light bg-light">
            <a class="brand text-success" href="/">WORD SEARCH</a>
            <form class="form-inline" action="/search"  method="GET" >
             
                <input class="form-control mr-sm-2" type="search" placeholder="Type word..." aria-label="Search" required="" name="word">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
    </header>
    <main class="py-4 ">
        @yield('content')
    </main>
    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>To do App</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="flex flex-row justify-between align-center">
            <a href="/">Todo App</a>
            {{-- <ul class="flex flex-row nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/app">App</a></li>
                <li><a href="/about">About</a></li>
            </ul> --}}
            <button><img src={{asset('Icons/mobile-menu-button.svg')}} alt=""></button>
        </nav>
    </header>

    {{$slot}}
    <script src="{{asset('js/script.js')}}"></script>
    
</body>
</html>
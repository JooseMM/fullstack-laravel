<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{asset('js/script.js')}}"></script>
    <title>To do App</title>
</head>
<body>
    <header>
        <nav class="flex flex-row justify-between">
            <a href="/">Todo App</a>
            {{-- <ul class="flex flex-row nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/app">App</a></li>
                <li><a href="/about">About</a></li>
            </ul> --}}
            <button>Mobile Menu</button>
        </nav>
    </header>

    {{$slot}}
    
</body>
</html>
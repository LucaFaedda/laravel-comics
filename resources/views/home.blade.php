<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class='bg-primary'>
    @include('partials.header')
    <div class='container'>
        <div class='row'>
            <div class='col-12'>
               <h1>centro</h1>
               @foreach ($prodotto as $fumetto )
               <ul>
                <li>{{ $fumetto['title'] }}</li>
               </ul>
                   
               @endforeach
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>

</html>

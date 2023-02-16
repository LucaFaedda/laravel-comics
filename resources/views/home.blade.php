<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body >
    @include('partials.header')
    <div class="container-fluid bk-dark">
        <div class='container'>
            <div class='row'>
                <div class='col-12'>
                    <div class="row">
                            @foreach ($prodotto as $fumetto)
                            <div class='col-2 d-flex '>
                                <div class="card-personalizzata">
                                    <div class="image-container">
                                        <img src="{{$fumetto['thumb']}}">
                                    </div>
                                    <p class="text-light">{{ $fumetto['series'] }}</p>
                                </div>
    
                            </div>
                             @endforeach

    
                    </div>
                       
                </div>
            </div>
        </div>

    </div>
    @include('partials.footer')
</body>

</html>

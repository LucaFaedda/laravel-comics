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
    <div class="jumbo">
        
    </div>
    <div class="container-fluid bk-dark">
        <div class='container'>
            <div class='row'>
                <div class='col-12 py-5'>
                    <div class="row">
                            @foreach ($prodotto as $fumetto)
                                <div class="card-personalizzata">
                                    <div class="image-container">
                                        <img src="{{$fumetto['thumb']}}">
                                    </div>
                                    <h6 class="text-light">{{ $fumetto['series'] }}</h6>
                                </div>
                            @endforeach
                    </div>
                       
                </div>
                <div class="col-12 d-flex justify-content-center mb-5 ">
                    <button class="text-light tw-bold btn-personalizzato ">LOAD MORE</button>
                </div>
            </div>
        </div>

    </div>
    @include('partials.footer')
</body>

</html>

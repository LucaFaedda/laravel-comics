@extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
            
                <h1>{{$comics_singolo['title']}}</h1>
            </div>
            <div class="col-4">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt='logo'>
            </div>
        </div>
    </div>
        

    @endsection


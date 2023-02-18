@extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>{{$comics_singolo['title']}}</h1>
            <div class="row d-flex ">
                <div class="col-8 d-flex justify-content-between .bg-success">
                   <p> {{$comics_singolo['price']}}</p>
                   <p>AVAIABLE</p>
                </div>
                <div class="col-4">
                    <select>
                        <option value="select">Check Availability</option>
                    </select>

                </div>
            </div>

            
            </div>
            <div class="col-4">
                <h6>ADVERTISEMENT</h6>
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv">
            </div>
        </div>
    </div>
        

    @endsection


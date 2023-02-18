@extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="light-blu ">{{$comics_singolo['title']}}</h1>
            <div class="row d-flex bg-green  border-bottom border-1 border-dark align-items-center">
                <div class="col-9 d-flex justify-content-between align-items-center border-end border-1 border-dark  p-2 ">
                    <div class="d-flex">
                        <span class="me-1 light-green">U.S. Price:</span><p class="m-0 text-light"> {{$comics_singolo['price']}}</p>
                    </div>
                   <p class="m-0 light-green">AVAIABLE</p>
                </div>
                <div class="col-2 d-flex flex-row-reverse align-items-center  p-2 ms-2">
                    <select class="select-personalizzata">
                        <option value="select">Check Availability</option>
                    </select>

                </div>
            </div>
            <p class="my-2">
                {{$comics_singolo['description']}}
            </p>

            
            </div>
            <div class="col-4">
                <h6>ADVERTISEMENT</h6>
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv">
            </div>
        </div>
    </div>
        

    @endsection


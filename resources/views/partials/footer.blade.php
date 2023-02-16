<footer>
    <div class="container-fluid bk-image">
        <div class="container">
            <div class='row'>
                <div class="col-12 bk-image-2">
                    <div class="d-flex">

                        <div class="lista-dc-comics d-flex flex-column mx-2">
                            <p class="fw-bold text-light"> DC COMICS </p>
                                @foreach ($listaFooter['DcComicsArray'] as $item )
                                    <a href=" {{$item['href']}}"> {{$item['nome']}}</a>
                                @endforeach
                        </div>
                        <div class="lista-dc-comics d-flex flex-column mx-2">
                            <p class="fw-bold text-light"> DC  </p>
                                @foreach ($listaFooter['DcArray'] as $item )
                                    <a href=" {{$item['href']}}"> {{$item['nome']}}</a>
                                @endforeach
                        </div>
                        <div class="lista-dc-comics d-flex flex-column mx-2">
                            <p class="fw-bold text-light"> SITES </p>
                                @foreach ($listaFooter['SitesArray'] as $item )
                                    <a href=" {{$item['href']}}"> {{$item['nome']}}</a>
                                @endforeach
                        </div>
                        <div class="lista-dc-comics d-flex flex-column mx-2">
                            <p class="fw-bold text-light"> SHOP </p>
                                @foreach ($listaFooter['ShopArray'] as $item )
                                    <a href=" {{$item['href']}}"> {{$item['nome']}}</a>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</footer>
@include('nav.header')

@include('common.search-temp')

<div id='app'>
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb" class='col-12 px-0'>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('properties') }}">Properties</a></li>
                    @if($count == 5) 
                    <li class="breadcrumb-item"><a href="{{ url('properties/digital-billboards') }}">Digital Billboards</a></li>
                    @else
                    <li class="breadcrumb-item"><a href="{{ url('properties/traditional-billboards') }}">Traditional Billboards</a></li>
                    @endif
                    <li class="breadcrumb-item active" aria-current="page">Roof Deck</li>
                </ol>
            </nav>


            <div class='col-6 mt-2 mb-5'>
                <img src='{{ asset('img/cubao.jpg') }}' class="img-fluid" style='cursor: pointer;' onclick="display(this)" />
                <div class='thumb'>
                    <img src='{{ asset('img/cubao.jpg') }}' class="" onclick="display(this)" />
                    <img src='{{ asset('img/edsa-station-pasay.jpg') }}' class="" onclick="display(this)" />
                    <img src='{{ asset('img/edsa-traffic-ber-months-situation-1566985698.jpg') }}' class="" onclick="display(this)" />
                    <img src='{{ asset('img/the-historic-edsa.jpeg') }}' class="" onclick="display(this)" />
                </div>
            </div>
            <div class='col-6 pdetails px-5 mt-2 mb-5'>
                <h1 class="title">Roof deck</h1>
                <span class="loc">North Edsa Station</span>
                <span class="size">Southbound Size: 50ft x 30ft</span>
                <span class="details">Vicinity: Farmer's Market, Alimal, Araneta Coliseum, Gaateway Mall</span>
                <span class="details">INFO: Positioned on ighly visible, heavy traffic locations succh as expressways and major roadways.</span>
                <span class="details">ADDRESS: North Avenue corner EDSA, Barangay Bagong Pag-asa, Quezon City</span>

                <img src='{{ asset('img/north-edsa-map.jpg') }}' class='img-thumbnail' width="300" onclick="display(this)"/>

                <button class='btn btn-primary'>BOOK NOW!</button>
            </div>

        </div>
    </div>
</div>

<div id="myModal" class="modal">
    <img src='{{ asset('img/close.png') }}' id='clx' class='clx'>
    <img class="modal-content" id="img01">       
</div>

<div class="topsearch">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5 px-0">
                <h3>Ad spaces you may like</h3>

                <div class="wrap">
                    @for($i = 0; $i < 8; $i++)
                    <section class='my-4'>
                        <img src="{{ asset('img/cubao.jpg') }}" />
                        <span class="loc">Cubao Station</span>
                        <span class="title">Walkway</span>
                        <span class="details">Northbound Size: W" H" <br /> Vicinity: Farmer's Market, Alimall, Araneta <br /> Coliseum, Gateway Mall</span>
                    </section>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>

@include('nav.footer')


<script>
    var listcounter = {{ $count }};
    
    function display (element) {
        var modal = $("#myModal");
        var modalImg = $("#img01");
        
        $("#myModal").css('display', 'block');
        $("#img01").attr('src', $(element).attr('src'));
        
        $('#clx').on('click', function () {
            $("#myModal").css('display', 'none');
        });
    }
</script>
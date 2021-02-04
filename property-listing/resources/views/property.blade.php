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
            
            
            <div class='col-6'>
                <img src='{{ asset() }}'>
            </div>
            <div class='col-6'>
            </div>
            
        </div>
    </div>
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
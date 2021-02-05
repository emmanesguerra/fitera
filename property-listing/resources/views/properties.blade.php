@include('nav.header')

@include('common.search-temp')

<div class='advertisewus'>
    <div class="container">
        <div class="row">
            <div class='categ col-3'>
                <ul>
                    @foreach($data as $category)
                    <li><a href='/properties/{{ $category['url'] }}'>{{ $category['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class='img-cont col-9'>
                <img src='{{ asset('img/advertisebanner.jpg') }}' class='img-fluid' alt='Advertise with us' title='Advertise with us'/>
            </div>
        </div>
    </div>
</div>

<div class="topsearch">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5 px-0">
                <h3>Top searches</h3>

                <div class="wrap">
                    @for($i = 0; $i < 8; $i++)
                    <section class='my-4'>
                        <img src="{{ asset('img/cubao.jpg') }}" alt='Cubao Station' title='Cubao Station'/>
                        <span class="loc">Cubao Station</span>
                        <span class="title">Walkway</span>
                        <span class="details">Northbound Size: W" H" <br /> Vicinity: Farmer's Market, Alimall, Araneta <br /> Coliseum, Gateway Mall</span>
                    </section>
                    @endfor
                </div>

                <div class='text-center'>
                    <button class='btn btn-primary my-5'>Load More</button>
                </div>
            </div>
        </div>
    </div>
</div>

@include('common.reach-audience')
@include('nav.footer')
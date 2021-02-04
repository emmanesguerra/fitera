@include('nav.header')

<div class="banner">
    <div class="container">
        <div class="row">
            <div class="content col-8 offset-2 text-center">
                <h1>ENHANCE YOUR BRAND</h1>
                <h2>THROUGH POWERFUL MEDIA</h2>

                <form class="form-inline col-12">
                    <div class="form-group col-6 p-3">
                        <icons-image _ngcontent-ssq-c22="" _nghost-ssq-c19=""><span _ngcontent-ssq-c19="" class="material-icons icon-image-preview">search</span></icons-image>
                        <input type="text" class="ml-2" placeholder="MRT station, place, etc." />
                    </div>
                    <div class="form-group col-4 p-3">
                        <select>
                            <option selected>Type of ad</option>
                        </select>
                    </div>
                    <div class="form-group col-2 p-0">
                        <button type="submit" class="btn btn-primary">SEARCH</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="audienceblk" class="audience text-center py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h3>Audience reach of OOH</h3>
            </div>
            <section class="col-4">
                <span class="src">Source: Senate Bill No 775</span>
                <span class="value">
                    <span class="actv">70%</span>
                </span>
                <p>Metro Manila total trips <br /> are made by commuters</p>
            </section>
            <section class="col-4">
                <span class="src">Source: Rappler.com</span>
                <span class="value">
                    <span class="actv">251,628</span>
                </span>
                <p>cars pass EDSA on  <br /> average daily</p>
            </section>
            <section class="col-4">
                <span class="src">Source: brandminds.live</span>
                <span class="value">
                    <span class="actv">15%</span>
                </span>
                <p>At 15%, the Philippines has one of the highest percentage shares of OOH ad spend in the world</p>
            </section>
        </div>
    </div>
</div>
<div class="advertise text-center py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h3>Where do you want to advertise?</h3>
                <p>The future of advertising is right at your fingertips. Learn more about our different <br /> Out-of-Home platforms today.</p>
            </div>

            <section>
                <img src="{{ asset('img/1.jpg') }}">
                <h4 class="py-4">Traditional Billboards</h4>
            </section>
            <section>
                <img src="{{ asset('img/5.jpg') }}">
                <h4 class="py-4">Digital Billboards</h4>
            </section>
            <section>
                <img src="{{ asset('img/3.jpg') }}">
                <h4 class="py-4">Turnstiles & Trains</h4>
            </section>

        </div>
    </div>
</div>
<div class="advertisment py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <img src="{{ asset('img/edsa-traffic-ber-months-situation-1566985698.jpg') }}" class="img-fluid" />
            </div>
            <div class="col-6 py-5 my-3">
                <h4>Out-of-Home advertising <br /> is the future.</h4>
                <p>Mediaworld offers flexibility for brands through Digital OOH to create fresh and captivating content. With multiple OOH platforms in all of the 13 MRT-3 stations along EDSA, your brand message.</p>
            </div>
        </div>
    </div>
</div>
@include('common.reach-audience')
@include('nav.footer')
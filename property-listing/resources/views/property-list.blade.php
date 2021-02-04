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
                    <li class="breadcrumb-item active" aria-current="page">Digital Billboards</li>
                    @else
                    <li class="breadcrumb-item active" aria-current="page">Traditional Billboards</li>
                    @endif
                </ol>
            </nav>
            
            <div class='col-2'>
                <filters v-bind:categories="{{ json_encode($data) }}"
                         v-bind:sizes="this.sizes"
                         v-bind:initialcnt="{{ $count }}"
                         v-on:emit-counter="setListCounter"/>
            </div>
            <div class='col-10 mb-5 pb-5'>
                @if($count == 5) 
                <h3>Digital Billboards</h3>
                @else
                <h3>Traditional billboards</h3>
                @endif
                
                <plists v-bind:data="this.model" 
                        v-bind:counter="this.listcounter"
                         v-bind:initialcnt="{{ $count }}"/>
            </div>
        </div>
    </div>
</div>


@include('nav.footer')

<script>
    var listcounter = {{ $count }};
</script>

        
<div class="black-nav pt-3 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-3 px-0">
                <a href="{{ url('/') }}" class="logo"></a>
            </div>
            <div class="col-9 px-0">
                <div class="top align-right ">
                    <icons-image _ngcontent-jid-c22="" _nghost-jid-c19="">
                        <span class="pl-1">info@mrtads.com </span>
                        <i _ngcontent-jid-c19="" class="material-icons icon-image-preview">mail</i>
                    </icons-image>
                    <span class="px-2"> | </span>
                    <icons-image _ngcontent-jid-c22="" _nghost-jid-c19="">
                        <span class="pr-1">(02)-890-1234 </span>
                        <i _ngcontent-jid-c19="" class="material-icons icon-image-preview">call</i>
                    </icons-image>
                </div>
                <div class="nav-cont float-right">
                    <ul class="nav">
                        <li class="nav-item"><a href="#">WHY OOH</a></li>
                        @if (Request::segment(1) == 'properties')
                        <li class="nav-item active"><a href="{{ url('properties') }}">PROPERTIES</a></li>
                        @else
                        <li class="nav-item"><a href="{{ url('properties') }}">PROPERTIES</a></li>
                        @endif
                        <li class="nav-item"><a href="#">ABOUT US</a></li>
                        <li class="nav-item"><a href="{{ url('login') }}">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
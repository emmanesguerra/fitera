<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fitera Practical Exam</title>
        <meta name="description" content="Fitera Practical Exam">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto+Slab:wght@400;600&display=swap" rel="stylesheet">
        <script src="https://use.fontawesome.com/863de05d13.js"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
        <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>

    </head>
    <body>
        
<div class="black-nav pt-3 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-3 px-0">
                <div class="logo">
                </div>
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
                        <li class="nav-item"><a href="#">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Lechtyper</title>
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    @livewireStyles
</head>

<body class="sb-nav-fixed">
    {{-- NAV --}}
    @include('components.partials.nav')
    {{-- /NAV --}}


    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                {{-- SIDEBAR MENU --}}
                <div class="sb-sidenav-menu">
                    @livewire('sidebar')
                </div>
                {{-- SIDEBAR FOOTER --}}
                <div class="sb-sidenav-footer">
                    @livewire('twitter-button')
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 py-3">
                    <div class="row">
                        {{ $content }}
                    </div>
                    @livewire('last-seen')
                </div>
            </main>
            @include('components.partials.footer')
        </div>
    </div>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>
    @livewireScripts
</body>

</html>

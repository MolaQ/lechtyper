<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>#LechTYPER | Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ asset('backend/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Toastr style -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/toastr/toastr.min.css') }}">

    <livewire:styles />
</head>





<body class="sb-nav-fixed">
    @include('layouts.partials.nav')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    @include('layouts.partials.sidebar')
                </div>

                {{-- TWITTER LOGOUT --}}
                <div>
                    <div class="d-grid gap-2 mx-2 my-2">
                        <a class="btn btn-danger" href="{{ route('twitter.logout') }}">
                            <i class="fa-solid fa-power-off"></i>
                            <span class="nav-text">WYLOGUJ</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 py-3">

                    <div class="row">
                        {{ $slot }}
                    </div>

                </div>
            </main>
            @include('layouts.partials.footer')
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('backend/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('backend/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('backend/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('backend/js/datatables-simple-demo.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('backend/plugins/toastr/toastr.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            toastr.options = {
                "progressBar": true,
                "positionClass": "toast-bottom-right"
            }

            window.addEventListener('hide-form', event => {
                $('#form').modal('hide');
                toastr.success(event.detail.message, 'Operacja wykonana!');
            })
            window.addEventListener('hide-form2', event => {
                $('#form2').modal('hide');
                toastr.success(event.detail.message, 'Operacja wykonana!');
            })

            window.addEventListener('hide-delete-modal', event => {
                $('#delete-modal').modal('hide');
                toastr.success(event.detail.message, 'Operacja wykonana!');
            })

        });
    </script>
    <script>
        window.addEventListener('show-form', event => {
            $('#form').modal('show');
        })
        window.addEventListener('show-form2', event => {
            $('#form2').modal('show');
            toastr.success(event.detail.message, 'Operacja wykonana!');
        })
        window.addEventListener('show-delete-modal', event => {
            $('#delete-modal').modal('show');
        })
    </script>
    <livewire:scripts />
</body>

</html>

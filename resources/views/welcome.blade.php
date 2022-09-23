<!DOCTYPE html>
<html lang="pl=PL">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="#LechTYPER" content="Typer ">

    <title>#LechTYPER - typer sympatyków Kolejorza</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('fontpage/assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('fontpage/assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />

    <!-- No Extra plugin used -->
    <link href='{{ asset('fontpage/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}' rel='stylesheet'>
    <link href='{{ asset('fontpage/assets/plugins/daterangepicker/daterangepicker.css') }}' rel='stylesheet'>


    <link href='{{ asset('frontend/assets/plugins/toastr/toastr.min.css') }}' rel='stylesheet'>







    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('frontend/assets/css/sleek.css') }}" />

    <!-- FAVICON -->
    <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('frontend/assets/plugins/nprogress/nprogress.js') }}"></script>
</head>

<body class="header-fixed sidebar-fixed" id="body">

    <div class="wrapper">

        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                <div class="app-brand">
                    <a href="{{ route('home') }}" title="#LechTYPER">
                        <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"
                            width="30" height="33" viewBox="0 0 30 33">
                            <g fill="none" fill-rule="evenodd">
                                <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                            </g>
                        </svg>

                        <span class="brand-name text-truncate">#LechTYPER</span>
                    </a>
                </div>

                <!-- begin sidebar scrollbar -->
                <div class="" data-simplebar style="height: 100%;">
                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">
                        <li class="">
                            <a class="sidenav-item-link" href="{{ route('home') }}">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">#LechTYPER</span>
                            </a>
                        </li>
                        <li class="">
                            <a class="sidenav-item-link" href="{{ route('home') }}">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">Tabela</span>
                            </a>
                        </li>



                    </ul>
                </div>
                <div class="sidebar-footer">
                    <hr class="separator mb-0" />
                    <div class="sidebar-footer-content">
                        @auth
                            <a class="btn btn-primary sidenav-item-link" href="{{ route('twitter.logout') }}">
                                <i class="mdi mdi-logout mr-2"></i>
                                <span class="nav-text">WYLOGUJ</span>
                            </a>
                        @else
                            <a class="btn btn-primary sidenav-item-link" href="{{ route('twitter') }}">
                                <i class="mdi mdi-twitter-circle mr-2"></i>
                                <span class="nav-text">DOŁĄCZ DO GRY</span>
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </aside>


        <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
        <div class="page-wrapper">

            <!-- Header -->
            <header class="main-header " id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                </nav>
            </header>


            <!-- ====================================
              ——— CONTENT WRAPPER
              ===================================== -->
            <div class="content-wrapper">
                <div class="content bg-primary">

                    <div class="row">
                        <div class="col-12">

                            <!-- Recent Order Table -->
                            <div class="card card-table-border-none" id="">
                                <div class="card-header justify-content-between">
                                    <h2>Panel typera</h2>
                                </div>
                                <div class="card-body pt-0 pb-5">

                                </div>
                            </div>

                        </div>
                    </div>


                </div> <!-- End Content -->
            </div> <!-- End Content Wrapper -->


            <!-- Footer -->
            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        Mechan WebDev 2022
                    </p>
                </div>
                <script>
                    var d = new Date();
                    var year = d.getFullYear();
                    document.getElementById("copy-year").innerHTML = year;
                </script>
            </footer>

        </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->


    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <script src="{{ asset('frontend/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/simplebar/simplebar.min.js') }}"></script>

    <script src='{{ asset('frontend/assets/plugins/charts/Chart.min.js') }}'></script>
    <script src='{{ asset('frontend/assets/js/chart.js') }}'></script>




    <script src='{{ asset('frontend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}'></script>
    <script src='{{ asset('frontend/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}'></script>
    <script src='{{ asset('frontend/assets/js/vector-map.js') }}'></script>

    <script src='{{ asset('frontend/assets/plugins/daterangepicker/moment.min.js') }}'></script>
    <script src='{{ asset('frontend/assets/plugins/daterangepicker/daterangepicker.js') }}'></script>
    <script src='{{ asset('frontend/assets/js/date-range.js') }}'></script>

    <script src='{{ asset(' frontend/assets/plugins/toastr/toastr.min.js') }}'></script>












    <script src="{{ asset('frontend/assets/js/sleek.js') }}"></script>
    <link href="{{ asset('frontend/assets/options/optionswitch.css') }}" rel="stylesheet">
    <script src="{{ asset('frontend/optionswitcher.js') }}assets/options/"></script>
</body>

</html>

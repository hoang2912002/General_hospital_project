<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <title>
        Đa khoa trang Quản lý
    </title>
    <!-- Google Font -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/css/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/css/jqvmap/jqvmap.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/css/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">


    <link href="{{ asset('asset/admin') }}/css/nucleo/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('asset/admin') }}/css/nucleo/nucleo-svg.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!--Material-dashboard-->
    <link id="pagestyle" href="{{ asset('asset/admin') }}/css/dashboard/material-dashboard.min.css?v=3.0.6"rel="stylesheet" />
    <!--Toastr-->
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/css/toastr/toastr.min.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @stack('css')
</head>

<body class="g-sidenav-show  bg-gray-200">


    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    @include('admin.layout.left_sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('admin.layout.header')


        <div class="container-fluid py-4">
            @yield('content')
            <br>
            @include('admin.layout.footer')

        </div>
    </main>
    @include('admin.layout.right_sidebar')

    <script src="{{ asset('asset/admin') }}/js/core/popper/popper.min.js"></script>
    <script src="{{ asset('asset/admin') }}/js/core/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('asset/admin') }}/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('asset/admin') }}/js/plugins/smooth-scrollbar.min.js"></script>

    <script src="{{ asset('asset/admin') }}/js/plugins/dragula/dragula.min.js"></script>
    <script src="{{ asset('asset/admin') }}/js/plugins/jkanban/jkanban.js"></script>
    <script src="{{ asset('asset/admin') }}/js/plugins/chartjs.min.js"></script>
    <script src="{{ asset('asset/admin') }}/js/plugins/world.js"></script>


    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('asset/admin') }}/js/dashboard/material-dashboard.min.js?v=3.0.6"></script>
    <script src="{{ asset('asset/admin') }}/js/toastr/toastr.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.error("{{ session('error') }}");
        @endif
        @if(Session::has('success'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.success("{{ session('success') }}");
        @endif
    </script>
    @stack('js')
</body>

</html>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login | NDA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NDA" name="LOGIN PG" />
    <meta content="NDA" name="author" />
     <!-- App favicon -->
     <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="bg-primary bg-pattern">
<div class="home-btn d-none d-sm-block">
    <a href="index.html"><i class="mdi mdi-home-variant h2 text-white"></i></a>
</div>

<div class="account-pages my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mb-5">
                    <a href="index.html" class="logo"><img src="{{asset('assets/img/logo/Logo_mobile_dark.png')}}"
                                                           height="150" alt="logo"></a> <br><br>
                    {{-- <h1 class="text-white mb-4" >NDA POSTGRADUATE SCHOOL</h1> --}}
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="p-2">
                            @yield('content')

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
<!-- end Account pages -->

<!-- JAVASCRIPT -->
<script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>

<script src="{{ asset('admin/assets/js/app.js') }}"></script>

</body>

</html>

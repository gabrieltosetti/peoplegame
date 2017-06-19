<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games - @yield('title') </title>


    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    @yield('css')

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.topnavbar')
            <!-- END Page wrapper -->

            <!-- Breadcrumb -->
            @if(!isset($breadcrumb))
                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-sm-4">
                        <h2>@yield('content_title')</h2>
                        @yield('breadcrumbs')
                    </div>
                    <div class="col-sm-8">
                        <div class="title-action">
                            <a href="" class="btn btn-primary">This is action area</a>
                        </div>
                    </div>
                </div>
            @endif
            <!-- END Breadcrumb -->

            <!-- Main view  -->
            @yield('content')
            <!-- END Main view  -->

            <!-- Footer -->
            @include('layouts.footer')
            <!-- END Footer -->

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

    <!-- Mainly scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>

@yield('scripts')


</body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.style')
</head>

<body data-layout="horizontal" data-topbar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.partials.header')

        <!-- ========== Left Sidebar Start ========== -->
        <!-- show only if in route material detail -->
        @if (false)
            @include('layouts.partials.sidebar')
        @endif
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    @yield('breadcrumb')
                    <!-- end page title -->

                    @yield('content')
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            @include('layouts.partials.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    @include('layouts.partials.script')
</body>
</html>

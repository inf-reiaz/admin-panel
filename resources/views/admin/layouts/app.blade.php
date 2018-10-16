
<!DOCTYPE html>
<html>
    <head>
        @include('admin.partials.head')
    </head>
    <body>

        <div id="ui" class="ui">

            <!--header start-->
            @include('admin.navs.head_nav')
            <!--header end-->

            <!--sidebar start-->
            @include('admin.navs.sidebar_nav')
            <!--sidebar end-->

            <!--main content start-->
            @yield('content')
            <!--main content start-->

            <!--footer start-->
            @include('admin.partials.footer')
            <!--footer end-->

        </div>

        <!-- inject:js -->
        <script src="{{ asset('/public/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('/public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/public/admin/bower_components/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('/public/admin/bower_components/autosize/dist/autosize.min.js') }}"></script>
        <!-- endinject -->

        <!--sparkline-->
        <script src="{{ asset('/public/admin/bower_components/bower-jquery-sparkline/dist/jquery.sparkline.retina.js') }}"></script>
        <script src="{{ asset('/public/admin/assets/js/init-sparkline.js') }}"></script>


        <!--horizontal-timeline-->
        <script src="{{ asset('/public/admin/assets/js/horizontal-timeline/js/jquery.mobile.custom.min.js') }}"></script>
        <script src="{{ asset('/public/admin/assets/js/horizontal-timeline/js/main.js') }}"></script>
        <!-- Common Script   -->
        <script src="{{ asset('/public/admin/dist/js/main.js') }}"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
        
        
        @yield('js')
        
    </body>
</html>

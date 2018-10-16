
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','Admin')</title>

        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('/public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/admin/bower_components/simple-line-icons/css/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/admin/bower_components/weather-icons/css/weather-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/admin/bower_components/themify-icons/css/themify-icons.css') }}">
        <!-- endinject -->

        <!-- Main Style  -->
        <link rel="stylesheet" href="{{ asset('/public/admin/dist/css/main.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.min.css">
        @yield('css')
        <!-- Rickshaw Chart Depencencies -->
        <link rel="stylesheet" href="{{ asset('/public/admin/bower_components/rickshaw/rickshaw.min.css') }}">


        <!--horizontal-timeline-->
        <link rel="stylesheet" href="{{ asset('/public/admin/assets/js/horizontal-timeline/css/style.css') }}">


        <script src="{{ asset('/public/admin/assets/js/modernizr-custom.js') }}"></script>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'FX CMS') }}</title>
    <!-- Bootstrap 3.3.7 -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL::asset('backend/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ URL::asset('backend/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::asset('backend/assets/css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ URL::asset('backend/iCheck/square/blue.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    @if( auth()->check() )
        <link rel="stylesheet" href="{{ URL::asset('backend/assets/css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('backend/jvectormap/jquery-jvectormap.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('backend/assets/css/AdminLTE.min.css') }}">
    @endif
</head>
<body @if(auth()->check())class="hold-transition skin-blue sidebar-mini"@endif >
    <div id="app">
        @if( auth()->check() )
            @include('backend.partials.main_header')
            @include('backend.partials.main_sidebar')
            @yield('content')
            @include('backend.partials.main_footer')
        @elseif( auth()->guest() )
            @yield('content')
        @endif
    </div>
    <!-- Scripts -->
    <!-- jQuery 3 -->
    <script src="{{ URL::asset('js/app.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ URL::asset('backend/iCheck/icheck.min.js') }}"></script>
    <script src="{{ URL::asset('backend/assets/js/adminlte.js') }}"></script>
    <script src="{{ URL::asset('backend/ckeditor/ckeditor.js') }}"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
        })
    </script>


    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>
</html>

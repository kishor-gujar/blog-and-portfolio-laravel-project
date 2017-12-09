<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="theme-color" content="#333">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Prograaming Place') }}</title>
        <meta name="description" content="Material Style Theme">
        <link rel="shortcut icon" href="assets/img/favicon30f4.png?v=3">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <link rel="stylesheet" href="{{ asset('assets/css/preload.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.light-blue-500.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/width-boxed.min.css')}}" id="ms-boxed" disabled="">

        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.min.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        @yield('content')
        @yield('script')

        <script src="{{asset('assets/js/plugins.min.js')}}"></script>

        <script src="{{asset('assets/js/app.min.js')}}"></script>
        <script src="{{asset('assets/js/configurator.min.js')}}"></script>
        <script>
(function (i, s, o, g, r, a, m)
{
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function ()
    {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-90917746-2', 'auto');
ga('send', 'pageview');
        </script>
        <script src="{{ asset('assets/js/index.js') }}"></script>

    </body>
</html>

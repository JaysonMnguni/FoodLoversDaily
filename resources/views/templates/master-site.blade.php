<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/site.css')}}">
    <title>@yield('page-title')</title>
</head>
<body>

    @include('partials.main-page-header')

    @yield('site-content')
    
    <script src="{{asset("js/bootstrap.bundle.js")}}"></script>
    <script src="{{asset("js/tinymce/tinymce.min.js")}}"></script>
    @yield('scripts')
</body>
</html> 
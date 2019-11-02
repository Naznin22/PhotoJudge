<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PhotoJudge') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <style>
           body {
                        background: url('images/6.PNG');
                        color: #636b6f;
                        font-family: 'Nunito', sans-serif;
                        font-weight: 200;
                        background-size: cover;
                        margin: 0;
                    }
            nav {
                color: #191970;
            }

            .project-list {
   margin: 0 -15px; }
   .project-list .project {
     float: left;
     width: 33.3333%;
     padding: 0 15px;
     text-align: center;
     margin-bottom: 30px; }
     .project-list .project:nth-child(3n+1) {
       clear: both; }
     @media screen and (max-width: 990px) {
       .project-list .project {
         width: 50%; }
         .project-list .project:nth-child(3n+1) {
           clear: none; }
         .project-list .project:nth-child(2n+1) {
           clear: both; } }
     @media screen and (max-width: 480px) {
       .project-list .project {
         width: 100%; }
         .project-list .project:nth-child(2n+1) {
           clear: none; } }
     .project-list .project .project-content {
       border: 1px solid #dde7ea;
       border-radius: 5px;
       padding: 20px;
       box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1); }
     .project-list .project .project-image {
       margin-bottom: 20px; }
       .project-list .project .project-image img {
        display: inline-block;
         max-width: 100%;
         width: 100%;
         height: auto; }
     .project-list .project .project-title {
       font-size: 18px;
       font-size: 1.2em;
       font-weight: 300; }
 
 figure {
   margin-bottom: 30px; }
   figure img {
    display: inline-block;
     max-width: 100%;
     height: auto;
     border-radius: 5px; }
 
 .project-info {
   list-style: none;
   margin-bottom: 30px; }
   .project-info li {
     padding: 10px 0;
     border-bottom: 1px solid #edf2f4; }
     .project-info li:last-child {
       border-bottom: none; }

            .tiles{
                width: 100px;
                display: inline-block;
            }
            </style>
</head>
<body >
     <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel"> 
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                <div class="navbar-brand">
                    {{ config('app.name', 'Laravel') }}
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
         </nav> 

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

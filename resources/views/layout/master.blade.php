<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('storage/images/favicon_fehu.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('storage/images/favicon_fehu.png') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

    <!-- Web Fonts 
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet"/>	
    
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/webpage.css') }}" />
        
    <!-- Favicons
    ================================================== -->
    <script src="{{ asset('js/app.js') }}" defer></script>
 
    <meta name="description" content="Fehu NFT Collection" />
    @yield('topinlinescripts')
   
  </head>
  <body>
    @yield('content')
    @yield('scripts')
    
  </body>
<footer>
    
</footer>
</html>
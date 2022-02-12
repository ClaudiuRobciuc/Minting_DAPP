<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="./favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="apple-touch-icon" href="{{ asset('storage/images/logo192.png') }}" />
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <meta name="description" content="Fehu NFT Collection" />
  </head>
  <body>
    @include('inc.navbar')
    @include('inc.messages')
        @yield('content')
        @yield('scripts')
</body>
<footer>
    @yield('footer')
</footer>
</html>
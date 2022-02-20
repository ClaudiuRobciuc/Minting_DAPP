<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="./favicon.ico" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

    <link rel="apple-touch-icon" href="{{ asset('storage/images/logo192.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href='https://fonts.googleapis.com/css?family=Open Sans Condensed:300' rel='stylesheet'>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <meta name="description" content="Fehu NFT Collection" />
    @yield('topinlinescripts')
   
  </head>
  <body>
    @include('inc.navbar')
    @include('inc.messages')
    @yield('content')
    @yield('scripts')
</body>
<footer>
    @include('inc.footer')
</footer>
</html>
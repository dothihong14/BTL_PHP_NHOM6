<!DOCTYPE html>
@php
$settings = App\Models\Setting::first(); // Truy vấn model Settings
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ Storage::url($settings->web_icon)}}" type="image/png">
    <meta name="google" content="notranslate">


    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta name="twitter:url" content="{{ request()->fullUrl() }}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.structure.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.theme.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link id="cssRtl" rel="stylesheet" href="#">
<link rel="stylesheet" href="{{ asset('assets/css/flatpickr.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/fontawesome-stars-o.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/nouislider.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/blueimp-gallery.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/style.min.css') }}">
<link id="cssTheme" rel="stylesheet" href="{{ asset('assets/skins/style-default.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    @livewireStyles
</head>
<style>
    * {
  font-family: "EB Garamond", serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}
.h1, .h2, .h3, .h4, h1, h2, h3, h4 
{
  font-family: "EB Garamond", serif;
  font-optical-sizing: auto;
  font-weight: 600;
  font-style: normal;
}
</style>

<body>

  @livewire('header' )

    {{ $slot }}
<livewire:auth-component />

    @livewireScripts
  
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
    
   
    @livewire('footer' )

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3gFKhVywUkygSxQEBdGVrI5-ZRrdjueA"></script>
    <script src="{{ asset('assets/js/maps.js') }}"></script>
    <script src="{{ asset('assets/js/libs/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/wNumb.js') }}"></script>
    <script src="{{ asset('assets/js/libs/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/barba.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/velocity.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/velocity.ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/ofi.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jarallax-element.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery.mCustomScrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/flatpickr/rangePlugin.js') }}"></script>
    <script src="{{ asset('assets/js/libs/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/select2/en.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery.blueimp-gallery.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo-switcher.js') }}"></script>
    
  
</body>

</html>

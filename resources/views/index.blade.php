<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

  
    
    
</head>
<body id="home">


  

  @include('includes.head')

  @include('includes.search')
  @include('includes.home')
  @include('includes.front')
  @include('includes.product')
  @include('includes.offre')
  @include('includes.footer')
  



   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

   {{-- <script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
   <script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
   <script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script> --}}
  
   <script src="{{ asset('assets/js/script.js') }}"></script>  
  <script src="{{ asset('assets/js/script1.js') }}"></script>
  <script src="{{ asset('assets/js/wish.ajax.js') }}"></script>

  <script language="JavaScript" type="text/javascript" src="{{ asset('assets/js/wish.ajax.js') }}"></script>

  
</body>
</html>
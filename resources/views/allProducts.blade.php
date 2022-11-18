<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
  
    <style>
       
    </style>
    
</head>
<body>
    @include('includes.head')

   @include('includes.search')

   
  <h1>
        All products
    </h1> 
    <div class="swiper-wrapper" >
        @foreach ($data as $article)
            <div class="swiper-slide swiper-slide2">
            
                
            
                <div  class="cart">
                        <i class="bi bi-heart-fill bi-heart" onclick="liked(this)"  ></i>
                        <div>
                            <a href="/Product/{{$article->id}}"><img class="product" src="/storage/{{$article->image}}" alt=""></a>
                        </div> 
                        <h6><b>{{$article->title}}</b></h6>
                        {{-- <p class="desc">{{$article->texte}}</p> --}}
                        <p class="price">{{$article->price}}<span>DA</span></p>
                </div>
               
            </div> 
        @endforeach
            
            
            </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha256-f/3u5OOj9c7fUgL5NEWK2U65jTKCMSzCWp6P+l+eKGI=" crossorigin="anonymous"></script>
           <script src="{{ asset('assets/js/script.js') }}"></script>  
   <script src="{{ asset('assets/js/script1.js') }}"></script>
   <script src="{{ asset('assets/js/wish.ajax.js') }}"></script>

   <script>

  
</script>
  
</body>
</html>
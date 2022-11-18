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
  
    
    
</head>
<body>
    @include('includes.head')
    @include('includes.search')


    <div class="container parent">

    @foreach ($articles as $article)
        
    
        <div class="info">
            <h1>
                {{$article->title}}
            </h1>
            <div class=" container advantages">
                <p>{{$article->texte}}</p>
            </div>

            @if ($article->promotion == 0)
            <p class="price">{{$article->price}} <span>DA</span></p> 
            
            @else ($article->promotion <> 0)
            <p class="price">{{$article->price*$article->promotion/100}} <span>DA</span><span class="promotion"> -{{$article->promotion}}% </span></p> 
            <div class=" container advantages">
            <p><del>{{$article->price}}</del></p>
            </div>
            @endif
            <div class="buy_btn" id="pc">
                @auth
                    <button onclick="location.href='{{$article->lien}}' " >Buy Now</button>
                @endauth

                @guest('web')

                <button onclick="location.href='/login' " >Buy Now</button>

                @endguest
                <button onclick="location.href='/Favorites/{{$article->id}}' " >Add to favorite </button> 
            </div>
         </div>

         <div class="service">
            <div>
                <img src="{{ asset('assets/imgs/delivery.svg') }}" alt="">
                <p>express delivery</p>
            </div>
            <div>
                <img src="{{ asset('assets/imgs/home.svg') }}" alt="">
                <p>Receipt from the exhibition</p>
            </div>
        </div>

        <div class="presentation">
            <img src="/storage/{{$article->image}}" id="principal" alt="">
            <div class="mark">
      <p> Product model: {{$article->model_number}} </p> 
                 {{-- <p>Product number: 10030565</p>  --}}
            </div>
            
        </div>

        <div class="gallery">
            @foreach ($images as $image)
                
                <div>
                    <img src="/storage/{{$image->name}}"  alt="" onmouseover="show(this)">
                </div>
            
            @endforeach
            {{-- <div>
                <img src="{{ asset('assets/imgs/laptop1.svg') }}" alt="" onmouseover="show(this)">
            </div>
            <div>
                <img src="{{ asset('assets/imgs/laptop2.svg') }}" alt="" onmouseover="show(this)">
            </div> --}}
            
           
        </div>
       
        
    </div>

    
    <div class="desc container">
        <h2> Description & more advantages </h2>
        <p>{{$article->texte}}</p>
@endforeach
    </div>
    @include('includes.offre')
    
   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   <script src="{{ asset('assets/js/script.js') }}"></script>  
   <script src="{{ asset('assets/js/script1.js') }}"></script>
</body>
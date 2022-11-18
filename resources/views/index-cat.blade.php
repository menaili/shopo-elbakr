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

   <div class="home">
    <div class="cat">
      <div class="swiper mySwiper2 slider1">
            <div class="swiper-wrapper" id="search_list">
                @foreach ($categories as $categorie)
                    
                      <div class="swiper-slide">
                        <a href="/Categories/{{$categorie->id}}">
                              <div>
                                  <img src="/{{$categorie->icon}}" alt="">
                              </div>
                              
                              <p>{{$categorie->name}}</p>
                          </a>
                      
                      </div>
                      @endforeach

            </div>
            </div>
    </div>
        
          <div class=" swiper-button-next1"> <img src="{{ asset('assets/imgs/R.svg') }}" alt=""></div>
          <div class=" swiper-button-prev1"> <img src="{{ asset('assets/imgs/L.svg') }}" alt=""></div>
        

</div>

   
<div class="fav">
    <h1>
        All products
    </h1>
    <div class="swiper-wrapper" >
      @foreach ($articles as $article)
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
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   <script src="{{ asset('assets/js/script.js') }}"></script>  
   <script src="{{ asset('assets/js/script1.js') }}"></script>
  
  
</body>
</html>
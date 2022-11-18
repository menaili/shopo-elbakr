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
   <form action="">

  <div class="fav">
    <h1>
        My Favorites
    </h1>
    @foreach ($favorites as $favorite)
        
    <div class="container favParent">
        <div  class="cartfav">
            <div>
                <a href="Product/{{$favorite->article_id}}"><img class="product" src="/storage/{{$favorite->image}}" alt=""></a>
            </div> 
            <div style="text-align: left;">
                <h3>{{$favorite->title}}</h3>
                <p >{{$favorite->texte}}</p>
                <p class="price">{{$favorite->price}} <span>DA</span></p>
                
            </div>
            <div>
                <form action="{{route('Favorites.destroy',$favorite->id)}}" method="POST">
                   @csrf
                    @method('delete')
                    
                    <a data-method="POST" class="remove"><button>Remove</button></a>

                    {{-- <button type="submit" class="btn btn-outline-danger">Delete</button> --}}
                </form>
            </div>
        </div>
     </div>
    </div>
    @endforeach

  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   <script src="{{ asset('assets/js/script.js') }}"></script>  
   <script src="{{ asset('assets/js/script1.js') }}"></script>
  
  
</body>
</html>
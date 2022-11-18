@section('offre')



<div class="most_common">
    <h2>Weekly Offers</h2>
    <div class="racine1">

    
        <div class="swiper mySwiper4 s4 content">
            <div class="swiper-wrapper">
        @foreach ($articles as $article)
        @if ($article->promotion <> 0)
            
        
            <div class="swiper-slide swiper-slide2">
            <div  class="cart">
                        <i class="bi bi-heart-fill bi-heart" onclick="liked(this)"></i>
                        <div>
                            <a href="/Product/{{$article->id}}">
                            <img class="product" src="/storage/{{$article->image}}" alt=""></a>
                        </div> 
                        <h6><b>{{$article->title}}</b></h6>
                        {{-- <p class="desc">{{$article->texte}}</p> --}}
                        <p class="price">{{$article->price*$article->promotion/100}} <span>DA</span> <span class="promotion"> -{{$article->promotion}}% </span></p>
                        <p><del>{{$article->price}}</del><span>DA</span></p>
            </div>
            </div>
            @endif
        @endforeach
           
            
            </div>
            
            
        </div>
        <div class="swiper-button-prev4"> <img src="{{ asset('assets/imgs/L.svg') }}" alt=""></div>
            <div class="swiper-button-next4"> <img src="{{ asset('assets/imgs/R.svg') }}" alt=""></div>
    </div>
</div>



@show
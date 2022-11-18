@section('home')
<div class="home">
    <div class="cat">
      <div class="swiper mySwiper2 slider1">
            <div class="swiper-wrapper">
                @foreach ($categories as $categorie)
                    
                      <div class="swiper-slide">
                        <a href="/Categories/{{$categorie->id}}">
                              <div>
                                  <img src="{{$categorie->icon}}" alt="">
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

@show
@section('category')
<div class="home">
<div class="cat">
    <div class="swiper mySwiper2 slider1">
          <div class="swiper-wrapper">
              @foreach ($categories as $categorie)
                  
                    <div class="swiper-slide">
                        <a href="">
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
</div>
  @show
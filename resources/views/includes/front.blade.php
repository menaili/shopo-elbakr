@section('front')
<div class="fond">
    <div class="swiper mySwiper">
          <div class="swiper-wrapper">
          @foreach ($ADs as $annonce)
          @if ($annonce->status <> "principale")              
            <div class="swiper-slide"><img src="/storage/{{$annonce->image}}" alt=""></div> 
            {{-- <div class="swiper-slide"><img src="{{ asset('assets/imgs/front1.png') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/imgs/front2.png') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/imgs/front3.png') }}" alt=""></div> --}}
            
          @endif  
          @endforeach

          </div>
          <div class="swiper-pagination"></div>
          
        </div>
  </div>
  @show
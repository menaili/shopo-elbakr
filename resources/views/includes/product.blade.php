@section('product')

<livewire:styles />

<div class="most_common" id="most_common">
    <h2>Most Common</h2>

    <div class="racine">

    
        <div class="swiper mySwiper3 s2 content">
            <div class="swiper-wrapper" id="search_list">
        @foreach ($articles as $article)
            <div class="swiper-slide swiper-slide2">
            
                
            
                <div  class="cart">
                    @php
                       // $witem = Favorite::countent()->pluck('id');
                    @endphp
                        {{-- <i class="bi bi-heart-fill bi-heart" onclick="liked(this)"  ></i> --}}
                        <div>
                      
                            <a href="#" wire:click="addtofavorit({{$article->id}})" class="update_wishlist" ><i class="bi bi-heart-fill bi-heart" ></i></a>

                       

                        </div>
                        <div>
                            <a href="Product/{{$article->id}}"><img class="product" src="/storage/{{$article->image}}" alt=""></a>
                        </div> 
                        <div>
                        <h6><b>{{$article->title}}</b></h6>
                       </div> {{-- <p class="desc">{{$article->texte}}</p> --}}
                        <p class="price">{{$article->price}}<span>DA</span></p>
                </div>
               
            </div> 
        @endforeach
            
            
            </div>
            
            
        </div>
        <div class=" swiper-button-prev2"> <img src="{{ asset('assets/imgs/L.svg') }}" alt=""></div>
        <div class=" swiper-button-next2"> <img src="{{ asset('assets/imgs/R.svg') }}" alt=""></div>
    </div>
</div>


<div class="pub">
    @foreach ($ADs as $annonce)
    @if ($annonce->status == "principale")
    <img src="/storage/{{$annonce->image}}" alt="">
    @endif
    @endforeach
</div>
<livewire:scripts />
@stack('scripts')
@show




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<script>
    var user_id= "{{ Auth::id()}}";
    
    alert(article_id);
    $(document).ready(function() {
        $('.update_wishlist').click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var article_id = $(this).data('article');
        $.ajax({
            type:'POST',
            url:'/updateFav',
            data{ 
                article_id: article_id,
                user_id: user_id
            },
            success:function(response){
                console.log(response);
            }
        });
        });
    });
</script>


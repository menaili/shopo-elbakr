<?php

namespace App\Http\Controllers;
use App\Models\Article;
use \Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Search extends Controller
{
    public function search(Request $request ) {
        
        $data=Article::where('title','like','%'.$request->search.'%')
            ->paginate(15);
            return view('allProducts',compact('data'));
    }

    //     if ($request->ajax()){
    //         $data=Article::where('id','like','%'.$request->search.'%')
    //         -> orwhere('title','like','%'.$request->search.'%')
    //         ->paginate(15);
    //         return $data;
            
           

    //     if ( count ($data) > 0 ) {
          
    //   foreach ($data as $article){
    //   $output = '
    //       <div class="swiper-slide swiper-slide2">
          
              
          
    //           <div  class="cart">
    //                   <i class="bi bi-heart-fill bi-heart" onclick="liked(this)"  ></i>
    //                   <div>
    //                       <a href="/Product/'.$article->id.'"><img class="product" src="/storage/'.$article->image.'" alt=""></a>
    //                   </div> 
    //                   <h6><b>'.$article->title.'</b></h6>
    //                   {{-- <p class="desc">'.$article->texte.'</p> --}}
    //                   <p class="price">'.$article->price.'<span>DA</span></p>
    //           </div>
             
    //       </div> ';
    //     }
          
      
       
    //    }
    //    else{
    //         $output = ' No ' ;
            
    //     }
    //     return $output;
    //     }
    //     }


        public function wishliste($id){

            DB::table('favorites')->insert([
                'user_id' => (Auth::user()->id),
             //   'veterinary_status_date' => Carbon::now()->toDateTimeString(),
                'article_id' => $id,
                
            ]);
        }
}

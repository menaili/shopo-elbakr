<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use \Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $favorites = DB::table('favorites')->where('favorites.user_id',Auth::user()->id)
        ->join('articles', 'articles.id', '=', 'favorites.article_id')
        ->select('articles.id as article_id',
        'articles.title',
        'articles.texte',
        'articles.image',
        'articles.price',
        'favorites.*')
        ->get();
        return view('article.favorite',compact('favorites')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        date_default_timezone_set('Africa/Algiers');
       $cmt=DB::table('favorites')->where('article_id',$id)->count();

        if($cmt > 0){
            DB::table('favorites')->where('article_id',$id)->delete();
            DB::table('favorites')->insert([
                'user_id' => (Auth::user()->id),
             //   'veterinary_status_date' => Carbon::now()->toDateTimeString(),
                'article_id' => $id,

            ]);

            return back();
        }
        else{
            DB::table('favorites')->insert([
                'user_id' => (Auth::user()->id),
             //   'veterinary_status_date' => Carbon::now()->toDateTimeString(),
                'article_id' => $id,

            ]);

            return back();
        }
            
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cmt=Favorite::where('article_id',$id)->count();
        return view('includes.product',compact('cmt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('favorites')->where('id',$id)->delete();
             return back();
              //->with('request_deleted', 'faculté supprimée avec succès!');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use \Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $existe = DB::table('favorites')->where('id',)->count();
        $categories = DB::table('categories')->get();
        $ADs = DB::table('annonces')->get();

        $articles = DB::table('articles')
        ->get();
      
        return view('index',compact('articles','categories','ADs')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')->get();
 
        return view('Add.add-product',compact('categories'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request
     *   $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
        $img = $request->file('picture')->getClientOriginalName();
        
        $image = $request->file('picture')->storeAs('products',$img,'kawa');

        //
        $validated = Validator::make($request->all(),
        [
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'link' => 'required',
            'picture' => ['required','max:2048'],
            'price' => 'required',
            'advantage' => 'required|min:3|max:255',
            
        ]);

    if($validated -> fails()){
        return redirect()->back()->withErrors($validated)->withInput($request->all());
    }

        DB::table('articles')->insert([
            'categorie_id'=>$request->category,
            'title'=>$request->name,
            'texte'=>$request->description,
            'lien'=>$request->link,
            'model_number'=>$request->model,
            'price'=>$request->price,
            'promotion'=>$request->promotion,
            'image'=>$image,
            'description'=>$request->advantage,
            'user_id' => (Auth::user()->id),
            

        ]);
        return back();

      //  return $image;
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = DB::table('categories')
        ->get();

        $articles = DB::table('articles')
        ->join('categories','categories.id','=','articles.categorie_id')
        ->select('categories.name','articles.*')
        ->where('articles.id',$id)
        ->first();
        return view('edit.edit-product',compact('articles','categories'));    

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
        $img = $request->file('picture')->getClientOriginalName();
        
        $image = $request->file('picture')->storeAs('products',$img,'kawa');

        $img2 = $request->file('picture2')->getClientOriginalName();
        $image2 = $request->file('picture2')->storeAs('products',$img2,'kawa');

        $img3 = $request->file('picture3')->getClientOriginalName();
        $image3 = $request->file('picture3')->storeAs('products',$img2,'kawa');


        $validated = Validator::make($request->all(),
        [
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'link' => 'required',
            
            'price' => 'required',
            'image' => 'required',
            'advantage' => 'required|min:3|max:255',
    



        ]);

    if($validated -> fails()){
        return redirect()->back()->withErrors($validated)->withInput($request->all());
    }

        DB::table('articles')->where('id',$id)->update([
            'categorie_id'=>$request->category,
            'title'=>$request->name,
            'texte'=>$request->description,
            'lien'=>$request->link,
            'model_number'=>$request->model,
            'price'=>$request->price,
            'promotion'=>$request->promotion,
            'image'=>$image,
            'description'=>$request->advantage,
            
            

        ]);

        $cmt = DB::table('images')->where('article_id',$id)->count();
        if($cmt == 0){
            DB::table('images')->insert([
                'article_id'=>$id,
                'name'=>$image2,
              
            ]);
    
            DB::table('images')->insert([
                'article_id'=>$id,
                'name'=>$image3,
              
            ]);
        }
        else{
            DB::table('images')->where('article_id',$id)->delete();

            DB::table('images')->insert([
                'article_id'=>$id,
                'name'=>$image2,
              
            ]);

            DB::table('images')->insert([
                'article_id'=>$id,
                'name'=>$image3,
              
            ]);
        }
        
        
        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('favorites')->where('article_id',$id)->delete();
        DB::table('articles')->where('id',$id)->delete();
        DB::table('images')->where('article_id',$id)->delete();
             return back();
    }
}

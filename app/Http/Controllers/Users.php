<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use \Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    public function index(){
        if (Auth::user()->status != 'elbadrAdmin') return back();

        $users = DB::table('users')
        ->get();
      
        return view('tables.users',compact('users')); 
    }

    public function prds(){
        if (Auth::user()->status != 'elbadrAdmin') return back();

        $prds = DB::table('articles')
        ->join('categories','categories.id','=','categorie_id')
        ->join('users','users.id','=','user_id')
        ->select('users.name as user','categories.name as category','articles.*')
        ->get();
      
        return view('tables.products',compact('prds')); 
    }

    public function myproducts(){
       
        $prds = DB::table('articles')->where('user_id','=',Auth::user()->id)
        ->join('categories','categories.id','=','categorie_id')
        ->select('categories.name as category','articles.*')
        ->get();
      
        return view('tables.myArticle',compact('prds')); 
    }

    public function deleteU(Request $request)
    {
        if (Auth::user()->status != 'elbadrAdmin') return back();
      User::findorFail($request->deleteme)->delete();
      return back();
    }

    public function log()
    {
        

        Auth::guard('web')->logout();
            return redirect('Articles');
        
    }

    
    }
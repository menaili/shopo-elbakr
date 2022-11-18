<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Psy\Command\WhereamiCommand;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->status != 'elbadrAdmin') return back();
        $ADs=DB::table('annonces')
        ->where('updated_at','<',Carbon::now())
        ->delete();

        $ADs=DB::table('annonces')
        ->get();
        
        return view('tables.annoncement',compact('ADs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->status != 'elbadrAdmin') return back();

        return view('Add.add-annonce'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->status != 'elbadrAdmin') return back();

        $img = $request->file('pictureAD')->getClientOriginalName();
        
        $image = $request->file('pictureAD')->storeAs('announcement',$img,'kawa');

        date_default_timezone_set('Africa/Algiers');
        $validated = Validator::make($request->all(),
        [
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'updated_at' => 'required',
            'status' => 'required',
            
        ]);

    if($validated -> fails()){
        return redirect()->back()->withErrors($validated)->withInput($request->all());
    }
        

        DB::table('annonces')->insert([
            
            'name'=>$request->name,
            'image'=>$image,
            'description'=>$request->description,
            'updated_at'=>$request->date,
            'created_at'=>Carbon::now()->toDateTimeString(),
            'status'=>$request->category,


            
            

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->status != 'elbadrAdmin') return back();

        $annonce = DB::table('annonces')
        ->where('id',$id)
        ->first();

        return view('edit.edit-annonce',compact('annonce'));
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
        if (Auth::user()->status != 'elbadrAdmin') return back();

        $img = $request->file('pictureAD')->getClientOriginalName();
        
        $image = $request->file('pictureAD')->storeAs('announcement',$img,'kawa');

        date_default_timezone_set('Africa/Algiers');
        $validated = Validator::make($request->all(),
        [
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'updated_at' => 'required',
            'status' => 'required',
            
        ]);

    if($validated -> fails()){
        return redirect()->back()->withErrors($validated)->withInput($request->all());
    }
        

        DB::table('annonces')->where('id',$id)->update([
            
            'name'=>$request->name,
            'image'=>$image,
            'description'=>$request->description,
            'updated_at'=>$request->date,
            'status'=>$request->category,


            
            

        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->status != 'elbadrAdmin') return back();

        DB::table('annonces')->where('id',$id)->delete();
             return back();
    }
}

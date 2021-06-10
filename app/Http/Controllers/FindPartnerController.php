<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Language;
use App\Models\User;
use App\Models\Country;

class FindPartnerController extends Controller
{
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       /*
	   $countries = [
                  ['id'=>1,'name'=>'Страна1'],
                  ['id'=>2,'name'=>'Страна2'],
                  ['id'=>3,'name'=>'Страна3'],
                  ['id'=>4,'name'=>'Страна4']

                ];
       */
	   
       $countries=Country::All();
       $lang = Language::All();
       //dd($lang);
        
	   $isAdm=false;
       
	   /*
	   if(Auth::check()){
        $user=Auth::user();
        if($user->role==1 || $user->role==0){ 
        $isAdm=$user->role; }                     
        //dd($user);
        }
       */
	   
       return view('bigbang.findpar', ['isAdm'=>$isAdm, 'countries'=>$countries, 'lang'=>$lang]);     
		
    }
    
    
    
    
    public function findPartner(Request $request)
    {
        //dd($request->all());
        //dd($request->input('sellang'));
        
        $idl=$request->input('sellang');
        $rez=User::where('language_id', $idl)->get();
        //dd($rez);
        return view('bigbang.findrez', ['rez'=>$rez, 'lang'=>$idl]);     
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
        //
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
        //
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
        //
    }
}

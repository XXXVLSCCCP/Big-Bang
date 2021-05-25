<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Talk;
use App\Models\Contact;

class TalksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $isAdm=false;
       if(Auth::check()){
        $user=Auth::user();
        if($user->role==1 || $user->role==0){ 
        $isAdm=$user->role; }                     
        //dd($user);
        }
      
      $talks=Talk::where('master_id', $user->id)->where('user_id', $id)->get();    
      return view('bigbang.talks', ['isAdm'=>$isAdm, 'talks'=>$talks]);     
    }

    public function sendInv($id)
    {
      $isAdm=false;
       if(Auth::check()){
        $user=Auth::user();
        if($user->role==1 || $user->role==0){ 
        $isAdm=$user->role; }                     
        //dd($user);
        }
        $isOk=false;
        
         $cnt=Contact::create(array(
         'master_id'  => $user->id,
         'user_id' => $id,
         'status_id'   => 1
         ));
        
        if($cnt->id){
           $isOk=Talk::insert(array(
           'master_id'  => $user->id,
           'user_id' => $id,
           'mess'   => 'Здравствуйте! Вы изучаете русский язык. Я являюсь носителем русского языка и учу английский. С целью изучения языков, приглашаю к сотрудничеству',
           'listtalks_id'=>$cnt->id   
          ));       
        }
        
        if($isOk) { $o='Отправлено'; }
        else {$o='Не отправлено';}
       
        return response($o);     
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

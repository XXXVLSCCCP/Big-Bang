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
        $isAdm=$user->role; 
        //dd($user);
        }

      //-- contact_id --        
      $contact=Contact::where('id', $id)->first();  
      $talks=Talk::where('contacts_id', $id)->get();    
      return view('bigbang.talks', ['isAdm'=>$isAdm, 'talks'=>$talks,'contacts_id'=>$id,'user1_id'=>$contact->user1_id,'user2_id'=>$contact->user2_id, 'userlk_id'=>$user->id ] );     
    }

    public function sendInv($id)
    {
       $role=0;
	   $isAdm=false;
	   $isOk=false;
		
	   $user=Auth::user();
	   //dd($user);
       if ($user) {    
         $role=$user->role;
         $cnt=Contact::create(array(
         'user1_id'  => $user->id,
         'user2_id' => $id,
         'status_id'   => 1
         ));
        
        if($cnt->id){
           $isOk=Talk::insert(array(
           'user1_id'  => $user->id,
           'user2_id' => 0,
           'mess'   => 'Здравствуйте! Вы изучаете русский язык. Я являюсь носителем русского языка и учу английский. С целью изучения языков, приглашаю к сотрудничеству',
           'contacts_id'=>$cnt->id   
          ));       
        }
       }
	   
        if($isOk) { $o='Отправлено'; }
        else {$o='Не отправлено';}
       
    return response($o);     
    }


    public function sendMsg(Request $request)
    {
     
        //dd($request->all());
        //dd($request->input('contact_id'));

       $role=0;
	   $isAdm=false;
	   $isOk=false;
       
	   $user=Auth::user();
	   //dd($user);
       if ($user) {    
         $role=$user->role;
        
        $contacts_id=$request->input('contacts_id');
        $user1_id=$request->input('user1_id');
        $user2_id=$request->input('user2_id');
        $mess=$request->input('mess');
        
        if($contacts_id){
           $isOk=Talk::insert(array(
           'user1_id'  => $user->id,
           'user2_id'  => $user2_id,
           'mess'   => $mess,
           'contacts_id'=>$contacts_id
          ));       
        }
       } 
        if($isOk) { $o='Отправлено'; }
        else {$o='Не отправлено';}

      $talks=Talk::where('contacts_id', $contacts_id)->get();    
      return view('bigbang.talks', ['isAdm'=>$isAdm, 'talks'=>$talks,'contacts_id'=>$contacts_id,'user1_id'=>$user->id,'user2_id'=>$user2_id, 'userlk_id'=>$user->id ] );     
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

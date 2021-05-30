<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
     public function showProfile()
    {
        
       
      $isAdm=false;
       if(Auth::check()){
        $user=Auth::user();
        if($user->role==1 || $user->role==0){ 
        $isAdm=$user->role; }                     
        //dd($user);
        }
       return view('bigbang.profile', ['isAdm'=>$isAdm]);     
    }
}


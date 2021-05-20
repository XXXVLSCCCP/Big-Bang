<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        
       $isAdm=false;
       if(Auth::check()){
        $user=Auth::user();
        if($user->role==1){ 
        $isAdm=true; }                     
        //dd($user);
        }
       return view('bigbang.admin.admin', ['isAdm'=>$isAdm]);    
    }

}

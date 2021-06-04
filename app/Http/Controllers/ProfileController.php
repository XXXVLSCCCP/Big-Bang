<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Country;
use App\Models\Language;
use App\Models\Messenger;
use App\Models\Userm;
use App\Models\User;
use App\Http\Requests\ProfileStoreRequest;


class ProfileController extends Controller
{
     public function showProfile()
    {
       $user=false;
	   $isAdm=false;
       if(Auth::check()){
          $user=Auth::user();
          $languages  = Language ::select('id', 'name')->get();
          $countries  = Country  ::select('id', 'name')->get();
          $messengers = Messenger::select('id', 'name')->get();
          $use_messengers = Userm::select('messenger_id')->where('user_id', $user->id)->get();		  
		}
	return view('bigbang.profile', ['isAdm'=>$isAdm,'user'=>$user,'countries'=>$countries, 'lang'=>$languages, 'messengers'=>$messengers, 'use_messengers'=>$use_messengers]);  
    }
	
	public function updProfile(ProfileStoreRequest $request ){
	     
		$isOk=true;
		
		try {
              $id=Auth::user()->id;
			  $profile = User::find($id);
			  //dd($profile);
			  //dd($request);
              if(!$profile){
                 return response('Профиль не найден');
	            }
		
			  $profile->user_name = $request->user_name;
			  $profile->birthdate = $request->birthdate;
			  $profile->language_id = $request->language_id;
			  $profile->country_id = $request->country_id;
			  $profile->learning_language_id = $request->learning_language_id;
			  $profile->gender = $request->gender;
			 
			  $profile->save();
			  $o='Сохранено';
           
	         }
	    catch (\Exception $e){ 
		      $o='Не сохранено';
			  }
	return response($o); 
	}

}



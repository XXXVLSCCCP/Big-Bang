<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Talk;
use App\Models\Contact;

class TalksController extends BaseController
{
   public function sendInv($id)
    {
      $role=0;
	  $msg= ""; $msg_kod=500; $success=false;
	  $isOk=false;
	  
	  $user=Auth::user();
	   //dd($user);
       if ($user) {    
		
			$role=$user->role;
			$mess='Здравствуйте! Вы изучаете русский язык. Я являюсь носителем русского языка и учу английский. С целью изучения языков, приглашаю к сотрудничеству';
			 $cnt=Contact::create(array(
			 'user1_id'  => $user->id,
			 'user2_id' => $id,
			 'status_id'   => 1
			 ));
        
			if($cnt->id){
			   $isOk=Talk::insert(array(
			   'user1_id'  => $user->id,
			   'user2_id' => 0,
			   'mess'   => $mess,
			   'contacts_id'=>$cnt->id   
			  ));       
			}
			
   		
			if(!$isOk){
				$msg='Not send';
				$msg_kod=404;
				$success=false;
			}
			else {

				$msg='success';
				$msg_kod=200;
				$success=true;
			}		
	    }	
	return $this->sendResponse($cnt, $msg, $msg_kod, $success );		
    }	
}

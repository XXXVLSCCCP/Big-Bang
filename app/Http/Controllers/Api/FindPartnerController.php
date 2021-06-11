<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Language;
use App\Models\User;
use App\Models\Country;
use App\Http\Resources\FindResource;


class FindPartnerController extends BaseController
{

//Для запроса используются данные только из профиля. Подойдет для кнопки 'Найти подхoдящие'
public function findPartnerProfile(Request $request)
    {
		$rez=false;
		$msg= ""; $msg_kod=500; $success=false;
        $user=Auth::user();
        if ($user) {        

			$ln=(int)$user->language_id;
			$ll=(int)$user->learning_language_id;
			
			if(!empty($ll) && empty($ln) ) {
				//$msg= "поиск 1 Список изучающих такой же язык: Изучаемый язык из профиля юзера = Изучаемый язык из профиля партнера   ";
				$rez=User::where('learning_language_id', $ll)->get();		
			} 
			elseif (!empty($ll) && !empty($ln) ) {
				//$msg= "поиск 2 Список изучающих и носителей языка перекрестный: Изучаемый язык из И Родной Язык из профиля юзера  => Изучаемый язык И Родной Язык из профиля партнера   ";
				$rez=User::where('language_id', $ll)->where('learning_language_id', $ln)->get();
			} 
		
			//dd($rez);
        }
		
	    if(!$rez){
		    $msg='Not found';
		    $msg_kod=404;
            $success=false;
	    }
		else {

			$msg='success';
			$msg_kod=200;
			$success=true;
		}		
		
	    return $this->sendResponse(FindResource::collection($rez), $msg, $msg_kod, $success );
    }  

//Для запроса используются данные только из ФормыПоиска. Подойдет для кнопки 'Быстрый поиск', 'Расширенный поиск'	
//незасимо от того, что указанно в профиле юзера, данные из профилей используются в выводе результата
public function findPartnerForm(Request $request)
    {
        //dd($request->all());
        //dd($request->input('sellang'));
		$rez=false;
		$msg= ""; $msg_kod=500; $success=false;
        $user=Auth::user();
        if ($user) {        
        
		$ln=(int)$request->input('language_id');
		$ll=(int)$request->input('learning_language_id');
        $cl=(int)$request->input('in_country_id');
		
		if(!empty($ll) && empty($ln) && empty($cl) ) {
			//$msg= "поиск 1: Изучаемый язык из запроса = Изучаемый язык из профиля партнера   ";
			$rez=User::where('learning_language_id', $ll)->get();
		} 
		elseif (!empty($ll) && !empty($ln) && empty($cl) ) {
			//$msg= "поиск 2: Изучаемый язык из И Родной Язык из запроса  => Изучаемый язык И Родной Язык из профиля партнера   ";
			$rez=User::where('language_id', $ll)->where('learning_language_id', $ln)->get();
		} 
		elseif (!empty($ll) && !empty($ln) && !empty($cl) ) {
			//$msg= "поиск 3: Изучаемый язык из И Родной Язык И Страна из запроса  => Изучаемый язык И Родной Язык И Страна из профиля партнера   ";
			$rez=User::where('language_id', $ll)->where('learning_language_id', $ln)->where('country_id', $cl) ->get();
		}
  
        //dd($rez);
        }
		
	    if(!$rez){
		    $msg='Not found';
		    $msg_kod=404;
            $success=false;
	    }
		else {

			$msg='success';
			$msg_kod=200;
			$success=true;
		}		
		
	    return $this->sendResponse(FindResource::collection($rez), $msg, $msg_kod, $success );
    }  

  
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Country;
use App\Models\Language;
use App\Models\Messenger;
use App\Models\Userm;
use App\Models\User;
use App\Http\Requests\ProfileStoreRequest;
//use App\Http\Resources\UserResource;
use App\Http\Resources\ProfileResource;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
	   $user = User::find($id);
       if(!$user){
		  return response()->json([
          'message'=>'Profile Not Found.'
          ],404);
        }
    return new ProfileResource($user);
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

	public function update(ProfileStoreRequest $request ){
	     
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
			  $o='success';
			  $ko=200;
           
	         }
	    catch (\Exception $e){ 
		      $o='fail';
			  $ko=500;
			  }
	
	return response()->json([
            'message' => $o
        ],$ko);
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

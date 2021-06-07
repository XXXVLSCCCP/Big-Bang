<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\LanguageResource;
use App\Http\Resources\CountryResource;
use App\Models\Language;
use App\Models\Country;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
     public function toArray($request)
    {
       		
		return [
		'id' => $this->id,
        'name' => $this->name,
		'email' => $this->email,
		'email_verified_at' => $this->email_verified_at,
		'created_at' => $this->created_at,
		'updated_at' => $this->updated_at,
		'user_name' => $this->user_name,
		'foto' => $this->foto,
		'birthdate' => $this->birthdate,
		'language_id' => $this->language_id,
		'language'=>new LanguageResource($this->language),
		'role' => $this->role,
		'country_id' => $this->country_id,
		'country'=>new CountryResource($this->usercountry), 
		'learning_language_id' => $this->learning_language_id,
		'learning_language'=>new LanguageResource($this->learnlanguage),
		'gender' => $this->gender
		 ];
		 
    }
}

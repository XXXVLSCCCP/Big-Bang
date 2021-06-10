<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\LanguageResource;
use App\Http\Resources\CountryResource;
use App\Models\Language;
use App\Models\Country;

class FindResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
	return [
		'id' => $this->id,
        'name' => $this->name,
		'user_name' => $this->user_name,
		'foto' => $this->foto,
		'birthdate' => $this->birthdate,
		'language_id' => $this->language_id,
		'language'=>new LanguageResource($this->language),
		'country_id' => $this->country_id,
		'country'=>new CountryResource($this->usercountry), 
		'learning_language_id' => $this->learning_language_id,
		'learning_language'=>new LanguageResource($this->learnlanguage),
		'gender' => $this->gender
		 ];		
    }
}


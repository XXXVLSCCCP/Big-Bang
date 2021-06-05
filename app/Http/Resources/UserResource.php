<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\LanguageResource;
use App\Models\Language;
use App\Models\Country;

class UserResource extends JsonResource
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
		$language = Language::find($this->language_id);
		$learning_language = Language::find($this->learning_language_id);
		$country = Country::find($this->country_id);
		
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
		//'language' =>LanguageResourceCollection::collection($this->language_id),
		//'language' =>LanguageResource::collection($this->language_id),
		//'language' =>new LanguageResource(Language::findOrFail($this->language_id)),
		'language' => new LanguageResource($language),
		'role' => $this->role,
		'country_id' => $this->country_id,
		'country' => new CountryResource($country),
		'learning_language_id' => $this->learning_language_id,
		//'learning_language' =>new LanguageResource(Language::findOrFail($this->learning_language_id)),
		'learning_language' => new LanguageResource($learning_language),
		'gender' => $this->gender
		 ];
		 
		 
    }
}

//PostResource::collection($this->posts)
/*
      "id": 8,
        "name": "1111",
        "email": "nik1111@email.com",
        "email_verified_at": null,
        "created_at": "2021-06-02T19:14:53.000000Z",
        "updated_at": "2021-06-04T06:17:04.000000Z",
        "user_name": "name3",
        "foto": null,
        "birthdate": "2000-01-21",
        "language_id": 1,
        "role": 0,
        "country_id": 1,
        "learning_language_id": 2,
        "gender": 1
*/		
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';
    
    public $timestamps = true;
    
    protected $fillable = ['name'];

   /*
    public function users(){
        return $this-hasMany(User::class, 'country_id');
    }
	*/
}

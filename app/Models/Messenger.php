<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messenger extends Model
{
    use HasFactory;

    protected $table = 'messengers';
    
    public $timestamps = true;
    
    protected $fillable = ['name'];

   
    public function users(){
        return $this-hasMany(User::class, 'messenger_id');
    }
	
}

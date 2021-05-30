<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
	
    protected $table = 'contacts';
    
    public $timestamps = true;
    
    protected $fillable = ['user1_id','user2_id','status_id'];	
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userm extends Model
{
    use HasFactory;
	
    protected $table = 'userm';
    
    public $timestamps = true;
    
    protected $fillable = ['user_id', 'messanger_id'];
	
}

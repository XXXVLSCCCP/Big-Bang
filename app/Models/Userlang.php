<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userlang extends Model
{
    use HasFactory;

    protected $table = 'userlangs';
    
    public $timestamps = true;
    
    protected $fillable = ['user_id', 'language_id'];

	
}

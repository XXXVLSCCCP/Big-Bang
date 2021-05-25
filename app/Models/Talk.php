<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
    use HasFactory;
	
    protected $table = 'talks';
    
    public $timestamps = true;
    
    protected $fillable = ['master_id','user_id', 'mess', 'listtalks_id'];
	
}

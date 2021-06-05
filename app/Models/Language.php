<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    
    protected $table = 'languages';
    
    public $timestamps = true;
    
    protected $fillable = ['name'];

   
    public function user(){
        return $this-hasMany(User::class, 'language_id');
    }
    
}

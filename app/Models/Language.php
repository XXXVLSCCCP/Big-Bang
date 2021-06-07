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

   /*
    public function user(){
        return $this-hasMany(User::class, 'language_id');
    }
	
	 public function usersNativeLang(){
        return $this-belongsTo(User::class, 'id','language_id');
    }
    
	 public function usersLearnLang(){
        return $this-belongsTo(User::class, 'id','learning_language_id');
    }
	*/
}

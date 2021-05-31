<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ExampleController extends Controller
{
    /**
     * Контороллер для теста
     * 
     * 
     */



    public function index() 
    { 
        // 
        
        return response()->json(User::get(), 200);

        // return "все работает"
    }
  }



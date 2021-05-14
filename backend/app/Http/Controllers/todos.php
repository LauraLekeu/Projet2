<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Todo;

class Todos extends Controller
{
    /** 
     *   Return toutes les todos au format json
     */
    public function index() {
        return response()->json(Todo::all());
    }
}
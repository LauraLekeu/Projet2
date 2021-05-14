<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Tag;

class Tags extends Controller
{
    /** 
     *   Return tous les tags au format json
     */
    public function index() {
        return response()->json(Tag::all());
    }
}
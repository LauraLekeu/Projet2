<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model 
{
    use HasFactory;

    /**
     * Getter du user à qui appartient la todo
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Getter du cours auquel appartient la todo
     */
    public function course() {
        return $this->belongsTo('App\Models\Course');
    }

}
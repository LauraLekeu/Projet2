<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model 
{
    use HasFactory;

    /**
     * Getter du user à qui appartient la note
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Getter du cours auquel appartient la note
     */
    public function course() {
        return $this->belongsTo('App\Models\Course');
    }

    /**
     * Getter des tags de la note
     */
    public function tags() {
        return $this->belongsToMany('App\Models\Tag');
    }
}
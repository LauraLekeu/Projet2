<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model 
{
    use HasFactory;

    /**
     * Getter du user à qui appartient le cours
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Getter des notes du cours
     */
    public function notes() {
        return $this->hasMany('App\Models\Note');
    }

    /**
     * Getter des devoirs du cours
     */
    public function todos() {
        return $this->hasMany('App\Models\Devoir');
    }
}
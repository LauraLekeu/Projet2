<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model 
{
    use HasFactory;

    /**
     * Getter du user à qui appartient le tag
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Getter des notes du tag
     */
    public function notes() {
        return $this->belongsToMany('App\Models\Note');
    }

}
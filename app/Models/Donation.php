<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    public function project(){
        return $this->belongsTo(Projet::class,'project_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    use HasFactory;

    public function novedad(){
        return $this->belongsTo(Novedad::class,'novedad_id','id');
    }
}

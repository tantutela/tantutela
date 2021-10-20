<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    protected $table = "habitacions";

    public function tipo () {
        return $this->hasOne("App\Models\TipoHabitacion");
    }

    public function alquiler () {
        return $this->belongsTo("App\Models\Alquiler");
    }
}

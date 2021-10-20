<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoHabitacion extends Model
{
    use HasFactory;

    protected $table = "tipo_habitacions";

    public function habitacion () {
        return $this->belongsTo("App\Models\Habitacion");
    }
}

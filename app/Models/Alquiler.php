<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    use HasFactory;

    protected $table = "alquilers";

    public function cliente() {
        return $this->hasMany("App\Models\Cliente");
    }

    public function habitacion() {
        return $this->hasOne("App\Models\Habitacion");
    }

    public function estado() {
        return $this->hasOne("App\Models\Estado");
    }
    
    public function registrador() {
        return $this->hasOne("App\Models\Registrador");
    }
}

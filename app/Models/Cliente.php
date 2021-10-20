<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = "clientes";

    public function nacionalidad () {
        return $this->hasOne("App\Models\Nacionalidad");
    }

    public function alquiler () {
        return $this->belongsTo("App\Models\Alquiler");
    }


}

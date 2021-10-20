<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrador extends Model
{
    use HasFactory;

    protected $table = "registradors";

    public function alquiler () {
        return $this->belongsTo("App\Models\Alquiler");
    }
}

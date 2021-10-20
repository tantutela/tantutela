<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    use HasFactory;

    protected $table = "nacionalidads";

    public function cliente () {
        return $this->belongsTo("App\Models\Cliente");
    }
}

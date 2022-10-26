<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;

    public function clientes() {
        return $this->hasMany(Cliente::class, "trab_id");
    }
}

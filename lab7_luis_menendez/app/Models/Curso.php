<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public function profesor()
    {
        return $this->belongsTo(Profesor::class, "prof_id");
    }

    // $curso->profesor->nombre
}

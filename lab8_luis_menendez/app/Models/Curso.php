<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public function profesores()
    {
        return $this->belongsToMany(Profesor::class, "cursos_profesors")->withTimestamps();
    }

    // $curso->profesor->nombre
}

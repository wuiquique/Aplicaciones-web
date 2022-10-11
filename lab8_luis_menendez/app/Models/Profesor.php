<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $table = "profesores";

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, "cursos_profesors")->withTimestamps();
    }

    // @foreach ($profesor->cursos as $curso)
}

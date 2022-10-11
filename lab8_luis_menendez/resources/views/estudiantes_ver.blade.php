<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <nav>
        Menu
        <ul>
            <li>
                <a href="/estudiantes">Estudiantes</a>
            </li>
            <li>
                <a href="/profesores">Profesores</a>
            </li>
            <li>
                <a href="/cursos">Cursos</a>
            </li>
        </ul>
    </nav>

    <p><b>Nombre:</b> {{ $estudiante->nombre }}</p>
    <p><b>Dpi:</b> {{ $estudiante->dpi }}</p>
    <p><b>Direccion:</b> {{ $estudiante->direccion }}</p>
    <p><b>Telefono:</b> {{ $estudiante->telefono }}</p>
    <p><b>Departamento:</b> {{ $estudiante->departamento }}</p>
    <p><b>Municipio:</b> {{ $estudiante->municipio }}</p>
    <p><b>Zona:</b> {{ $estudiante->zona }}</p>
    <p><b>Fecha de nacimiento:</b> {{ $estudiante->birth }}</p>
    <p><b>Genero:</b> {{ $estudiante->genero }}</p>
    <p><b>Facultad:</b> {{ $estudiante->facultad }}</p>
    <p><b>Carrera:</b> {{ $estudiante->carrera }}</p>
    <button onclick="location.href='/estudiantes/{{$estudiante->id}}/edit'">Actualizar</button>
    <form action="/estudiantes/{{$estudiante->id}}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" value="Borrar">
    </form>
</body>

</html>
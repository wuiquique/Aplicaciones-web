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

    <p><b>Nombre:</b> {{ $profesor->nombre }}</p>
    <p><b>Dpi:</b> {{ $profesor->dpi }}</p>
    <p><b>Direccion:</b> {{ $profesor->direccion }}</p>
    <p><b>Telefono:</b> {{ $profesor->telefono }}</p>
    <p><b>Departamento:</b> {{ $profesor->departamento }}</p>
    <p><b>Municipio:</b> {{ $profesor->municipio }}</p>
    <p><b>Zona:</b> {{ $profesor->zona }}</p>
    <p><b>Fecha de nacimiento:</b> {{ $profesor->birth }}</p>
    <p><b>Genero:</b> {{ $profesor->genero }}</p>
    <p><b>Grado Academico:</b> {{ $profesor->grado }}</p>
    <button onclick="location.href='/profesores/{{$profesor->id}}/edit'">Actualizar</button>
    <form action="/profesores/{{$profesor->id}}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" value="Borrar">
    </form>
</body>

</html>
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
    @foreach ($profesores as $profesor)
    <p><b>Nombre:</b> {{ $profesor->nombre }}</p>
    <p><b>Genero:</b> {{ $profesor->genero }}</p>
    <p><b>Grado Academico:</b> {{ $profesor->grado }}</p>
    <button onclick="location.href='/profesores/{{$profesor->id}}/edit'">Actualizar</button>
    <button onclick="location.href='/profesores/{{$profesor->id}}'">Ver</button>
    <form action="/profesores/{{$profesor->id}}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" value="Borrar">
    </form>
    @endforeach

    <form action="/profesores" method="POST">
        @csrf

        <input name="nombre" type="text" placeholder="Nombre"> <br>
        <input name="dpi" type="text" placeholder="DPI"> <br>
        <input name="direccion" type="text" placeholder="Direccion"> <br>
        <input name="telefono" type="text" placeholder="Telefono"> <br>
        <input name="departamento" type="text" placeholder="Departamento"> <br>
        <input name="municipio" type="text" placeholder="Municipio"> <br>
        <input name="zona" type="text" placeholder="Zona"> <br>
        <input name="birth" type="date" placeholder="Fecha de nacimiento"> <br>
        <input name="genero" type="text" placeholder="Genero"> <br>
        <input name="grado" type="text" placeholder="Grado Academico"> <br>
        <input type="submit" value="Crear">
    </form>
</body>

</html>
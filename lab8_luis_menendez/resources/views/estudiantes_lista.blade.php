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
    @foreach ($estudiantes as $estudiante)
    <p><b>Nombre:</b> {{ $estudiante->nombre }}</p>
    <p><b>Genero:</b> {{ $estudiante->genero }}</p>
    <p><b>Facultad:</b> {{ $estudiante->facultad }}</p>
    <button onclick="location.href='/estudiantes/{{$estudiante->id}}/edit'">Actualizar</button>
    <button onclick="location.href='/estudiantes/{{$estudiante->id}}'">Ver</button>
    <form action="/estudiantes/{{$estudiante->id}}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" value="Borrar">
    </form>
    @endforeach

    <form action="/estudiantes" method="POST">
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
        <input name="carrera" type="text" placeholder="Carrera"> <br>
        <input name="facultad" type="text" placeholder="Facultad"> <br>
        <input type="submit" value="Crear">
    </form>
</body>

</html>
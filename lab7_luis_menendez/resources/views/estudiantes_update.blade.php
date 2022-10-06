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

    <form action="/estudiantes/{{$estudiante->id}}" method="POST">
        @csrf
        @method("PUT")

        <input name="nombre" type="text" placeholder="Nombre" value="{{$estudiante->nombre}}"> <br>
        <input name="dpi" type="text" placeholder="DPI" value="{{$estudiante->dpi}}"> <br>
        <input name="direccion" type="text" placeholder="Direccion" value="{{$estudiante->direccion}}"> <br>
        <input name="telefono" type="text" placeholder="Telefono" value="{{$estudiante->telefono}}"> <br>
        <input name="departamento" type="text" placeholder="Departamento" value="{{$estudiante->departamento}}"> <br>
        <input name="municipio" type="text" placeholder="Municipio" value="{{$estudiante->municipio}}"> <br>
        <input name="zona" type="text" placeholder="Zona" value="{{$estudiante->zona}}"> <br>
        <input name="birth" type="date" placeholder="Fecha de nacimiento" value="{{$estudiante->birth}}"> <br>
        <input name="genero" type="text" placeholder="Genero" value="{{$estudiante->genero}}"> <br>
        <input name="carrera" type="text" placeholder="Carrera" value="{{$estudiante->carrera}}"> <br>
        <input name="facultad" type="text" placeholder="Facultad" value="{{$estudiante->facultad}}"> <br>
        <input type="submit" value="Guardar">
    </form>
</body>

</html>
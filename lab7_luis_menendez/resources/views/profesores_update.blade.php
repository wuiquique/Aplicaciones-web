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

    <form action="/profesores/{{$profesor->id}}" method="POST">
        @csrf
        @method("PUT")

        <input name="nombre" type="text" placeholder="Nombre" value="{{$profesor->nombre}}"> <br>
        <input name="dpi" type="text" placeholder="DPI" value="{{$profesor->dpi}}"> <br>
        <input name="direccion" type="text" placeholder="Direccion" value="{{$profesor->direccion}}"> <br>
        <input name="telefono" type="text" placeholder="Telefono" value="{{$profesor->telefono}}"> <br>
        <input name="departamento" type="text" placeholder="Departamento" value="{{$profesor->departamento}}"> <br>
        <input name="municipio" type="text" placeholder="Municipio" value="{{$profesor->municipio}}"> <br>
        <input name="zona" type="text" placeholder="Zona" value="{{$profesor->zona}}"> <br>
        <input name="birth" type="date" placeholder="Fecha de nacimiento" value="{{$profesor->birth}}"> <br>
        <input name="genero" type="text" placeholder="Genero" value="{{$profesor->genero}}"> <br>
        <input name="grado" type="text" placeholder="Grado Academico" value="{{$profesor->grado}}"> <br>
        <input type="submit" value="Guardar">
    </form>
</body>

</html>
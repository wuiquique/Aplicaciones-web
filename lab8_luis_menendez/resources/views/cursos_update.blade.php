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

    <form action="/cursos/{{$curso->id}}" method="POST">
        @csrf
        @method("PUT")

        <input name="nombre" type="text" placeholder="Nombre" value="{{$curso->nombre}}"> <br>
        <input name="creditos" type="text" placeholder="Creditos" value="{{$curso->creditos}}"> <br>
        <select name="prof_id">
            @foreach ($profesores as $profesor)
            <option value="{{$profesor->id}}" @selected($curso->prof_id == $profesor->id)>{{ $profesor->nombre }}</option>
            @endforeach
        </select>
        <input type="submit" value="Guardar">
    </form>
</body>

</html>
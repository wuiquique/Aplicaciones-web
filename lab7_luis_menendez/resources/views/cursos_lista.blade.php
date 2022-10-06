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
    @foreach ($cursos as $curso)
    <p><b>Nombre:</b> {{ $curso->nombre }}</p>
    <p><b>Creditos:</b> {{ $curso->creditos }}</p>
    <button onclick="location.href='/cursos/{{$curso->id}}/edit'">Actualizar</button>
    <button onclick="location.href='/cursos/{{$curso->id}}'">Ver</button>
    <form action="/cursos/{{$curso->id}}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" value="Borrar">
    </form>
    @endforeach

    <form action="/cursos" method="POST">
        @csrf

        <input name="nombre" type="text" placeholder="Nombre"> <br>
        <input name="creditos" type="number" placeholder="Creditos"> <br>
        <select name="prof_id">
            @foreach ($profesores as $profesor)
            <option value="{{$profesor->id}}">{{ $profesor->nombre }}</option>
            @endforeach
        </select>
        <input type="submit" value="Crear">
    </form>
</body>

</html>
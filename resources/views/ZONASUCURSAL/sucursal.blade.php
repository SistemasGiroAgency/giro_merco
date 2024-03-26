<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title></title>
</head>
<body id="app">
    <example-component></example-component>
    <hr>
        <a href="{{route('sucursal.create')}}">Crear Sucursal</a>
    <hr>
    <table>
        <thead>
            @foreach ($sucursal as $sucursales)
                <th>
                    {{$sucursales->nombre_sucursal}}
                    <a href="{{route('sucursal.edit', $sucursales->id)}}">Editar</a>
                    <form action="{{route('sucursal.destroy', $sucursales->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </th>
            @endforeach
        </thead>
    </table>
</body>
</html>
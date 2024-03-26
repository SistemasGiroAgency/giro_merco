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
        <a href="{{route('zona.create')}}">Crear zona</a>
    <hr>
    <table>
        @foreach ($zonas as $zona)
        <thead>
            <th>
                {{$zona->nombre_zona}}
                <a href="{{route('zona.edit', $zona->id)}}">Editar</a>
                <form action="{{route('zona.destroy', $zona->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <a href="sucursal/{id}">Ver sucursales</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</body>
</html>
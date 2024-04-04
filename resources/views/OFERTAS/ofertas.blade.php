<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <hr>
        <ul>
            <li><a href="/admin">Admin</a></li>
            <li><a href="{{route('ofertas.create')}}">Crear oferta</a></li>
        </ul>
    <hr>

    <table>
        @foreach ($oferta as $ofertas)
        <thead>
            <th>
                {{$ofertas->imagen}}
                <a href="{{route('ofertas.edit', $ofertas->id_oferta)}}">Editar</a>
                <form action="{{route('ofertas.destroy', $ofertas->id_oferta)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </th>
        </thead>
        <tbody>
            <tr>
                <td>
                    {{$ofertas->id_zona}}
                    {{$ofertas->id_sucursal}}
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</body>
</html>
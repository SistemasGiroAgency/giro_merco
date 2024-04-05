<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <title></title>
    </head>
    <body>
        <form action="{{route('ofertas.store')}}" method="POST">
            @csrf
            <div>
                <label for="">Imagen</label>
                <input type="file" name="imagen">
            </div>
            <div>
                <label for="">Fecha</label>
                <input type="date" name="fecha" id="">
            </div>
            <div>
                <label for="">Tipo</label>
                <select name="tipo" id="">
                    <option value="" selected>Selecciona tipo</option>
                    <option value="1">Oferta del dia</option>
                    <option value="2">Oferta de la semana</option>
                    <option value="3">Oferta de la temporada</option>
                </select>
            </div>
            <div>
                <label for=""><b>Zonas</b></label><br>
                @foreach ($zona as $zonas)
                    <input class="zona" id="{{$zonas->id}}" type="checkbox" name="zona[]" value="{{$zonas->id}}">
                    <label for="">{{$zonas->nombre_zona}}</label>
                @endforeach
            </div>
            <div>
                <label for=""><b>Sucursales</b></label><br>
                @foreach ($sucursal as $sucursales)
                    <input class="accesos" id="check{{$sucursales->id}}" data-sucursal="{{$sucursales->id_zona}}" type="checkbox" name="sucursal[]" value="{{$sucursales->id}}">
                    <label for="">{{$sucursales->nombre_sucursal}}</label>   
                @endforeach
            </div>
            <div>
                <input type="checkbox" name="habilitado" id="" value="1">
                <label for="">Habilitado</label>
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </form>
    </body>

    <script>
        $( ".zona" ).change(function() {
            var id = $(this).attr('id');
            if($(this).is(':checked')) {
            $( ".accesos" ).each(function( index ) {
                var dataZona = $(this).attr('data-sucursal');
                if(dataZona == id){
                $(this).prop('checked', true);
                }
            });
            }else{
            $( ".accesos" ).each(function( index ) {
                var dataZona = $(this).attr('data-sucursal');
                if(dataZona == id){
                $(this).prop('checked', false);
                }
            });
            }
        });
    </script>
</html>
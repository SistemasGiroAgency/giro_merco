<form action="{{route('sucursal.store')}}" method="POST">
@csrf
<div>
    <label for="">Nombre de la sucursal</label>
    <input type="text" name="nombre_sucursal" placeholder="Ingresa el nombre de la sucursal">
</div>
<div>
    <label for="">Horario</label>
    <input type="text" name="horario" placeholder="Ingresa el nombre de la sucursal">
</div>
<div>
    <label for="">Telefono</label>
    <input type="text" name="telefono" placeholder="Ingresa el nombre de la sucursal">
</div>
<div>
    <label for="">Mapa de Google</label>
    <input type="text" name="mapa" placeholder="Ingresa el nombre de la sucursal">
</div>
<div>
    <label for="">Como llegar</label>
    <input type="text" name="como_llegar" placeholder="Ingresa el nombre de la sucursal">
</div>
<div>
    <label for="">Zona</label>
    <select name="id_zona" class="sel">
        <option selected>Selecciona una opción</option>
        @foreach ($zonas as $zona)
        <option value="{{$zona->id}}">{{$zona->nombre_zona}}</option>
        @endforeach
    </select>
</div>
<div>
    <input type="submit" value="Enviar">
</div>
</form>
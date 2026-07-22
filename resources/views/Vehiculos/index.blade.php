<!DOCTYPE html>
<html>
<head>
    <title>Vehículos</title>
</head>
<body>

<h1>Lista de Vehículos</h1>

<a href="{{ route('vehiculos.create') }}">Nuevo Vehículo</a>

<br><br>

<table border="1">

<tr>
    <th>Placa</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Color</th>
    <th>Año</th>
    <th>Acciones</th>
</tr>

@foreach($vehiculos as $vehiculo)

<tr>

<td>{{ $vehiculo->placa }}</td>
<td>{{ $vehiculo->marca }}</td>
<td>{{ $vehiculo->modelo }}</td>
<td>{{ $vehiculo->color }}</td>
<td>{{ $vehiculo->anio }}</td>

<td>

<a href="{{ route('vehiculos.edit',$vehiculo->id) }}">
Editar
</a>

<form action="{{ route('vehiculos.destroy',$vehiculo->id) }}" method="POST">

@csrf
@method('DELETE')

<button type="submit">
Eliminar
</button>

</form>

</td>

</tr>

@endforeach

</table>

</body>
</html>

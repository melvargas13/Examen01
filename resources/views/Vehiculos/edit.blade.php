<!DOCTYPE html>
<html>
<head>
    <title>Editar Vehículo</title>
</head>
<body>

<h1>Editar Vehículo</h1>

<form action="{{ route('vehiculos.update',$vehiculo->id) }}" method="POST">

@csrf
@method('PUT')

<label>Placa</label><br>
<input type="text" name="placa" value="{{ $vehiculo->placa }}"><br><br>

<label>Marca</label><br>
<input type="text" name="marca" value="{{ $vehiculo->marca }}"><br><br>

<label>Modelo</label><br>
<input type="text" name="modelo" value="{{ $vehiculo->modelo }}"><br><br>

<label>Color</label><br>
<input type="text" name="color" value="{{ $vehiculo->color }}"><br><br>

<label>Año</label><br>
<input type="number" name="anio" value="{{ $vehiculo->anio }}"><br><br>

<button type="submit">
Actualizar
</button>

</form>

</body>
</html>
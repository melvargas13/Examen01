<!DOCTYPE html>
<html>
<head>
    <title>Registrar Vehículo</title>
</head>
<body>

<h1>Registrar Vehículo</h1>

<form action="{{ route('vehiculos.store') }}" method="POST">

    @csrf

    <label>Placa</label><br>
    <input type="text" name="placa" value="{{ old('placa') }}">
    @error('placa')
        <p>{{ $message }}</p>
    @enderror
    <br><br>

    <label>Marca</label><br>
    <input type="text" name="marca" value="{{ old('marca') }}">
    <br><br>

    <label>Modelo</label><br>
    <input type="text" name="modelo" value="{{ old('modelo') }}">
    <br><br>

    <label>Color</label><br>
    <input type="text" name="color" value="{{ old('color') }}">
    <br><br>

    <label>Año</label><br>
    <input type="number" name="anio" value="{{ old('anio') }}">
    <br><br>

    <button type="submit">Guardar</button>

</form>

</body>
</html>
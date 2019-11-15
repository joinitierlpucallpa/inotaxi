<!DOCTYPE html>
<html>
<head>
	<title>Mostrar conductores</title>
</head>
<body><center>
<form method="post" action="#">
<table border="1">
	<tr>
		<th>Idvehiculo</th>
		<th>idconductor</th>
		<th>placa</th>
		<th>Descripcion</th>
		<th>foto TP</th>
		<th>foto Soat</th>
		<th>Id propietario</th>
		<th>Foto multas</th>
		<th>fecha de Vencimiento soat</th>
		<th>estado</th>
		<th>detalle estado</th>
	</tr>
@foreach ($vehiculos as $vehiculo)
		<tr>
			<td>{{$vehiculo->idvehiculo}}</td>
			<td>{{$vehiculo->idconductor}}</td>
			<td>{{$vehiculo->placa}}</td>
			<td>{{$vehiculo->descripcion}}</td>
			<td>{{$vehiculo->fotoTP}}</td>
			<td>{{$vehiculo->fotoSoat}}</td>
			<td>{{$vehiculo->idpropietario}}</td>
			<td>{{$vehiculo->fotoMultas}}</td>
			<td>{{$vehiculo->fecVenSoat}}</td>
			<td>{{$vehiculo->estado}}</td>
			<td>{{$vehiculo->detalleestado}}</td>
		</tr>
@endforeach
</table>
</form></center>
</body>
</html>
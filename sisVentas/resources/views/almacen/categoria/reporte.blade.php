
<!DOCTYPE html>
<html>
<head>
	<title>Reporte de categorias</title>
	<style >
		table{
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;

		}

		td, th{
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;

		}
		tr:nth-child(even){
			background-color: #dddddd;
		}
	</style>
</head>
<body>
	<h2>Repote de Categorias</h2>
<table>
<tr>
	<th>Nombre</th>
	<th>Descripcion</th>
</tr>
@foreach($categorias AS $c)
<tr>
	<td>{{ $c->nombre}}</td>
	<td>{{ $c->descripcion}}</td>
</tr>
@endforeach
</table>

</body>
</html>
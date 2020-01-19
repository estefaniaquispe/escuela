<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>DataTables</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
</head>
<body>

	<table class="table display AllDataTables">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Pais</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Carlos</td>
				<td>Alfaro</td>
				<td>El Salvador</td>
			</tr>
			<tr>
				<td>Evelyn</td>
				<td>Melendez</td>
				<td>EE.UU</td>
			</tr>
			<tr>
				<td>Brenda</td>
				<td>Lopez</td>
				<td>EE.UU</td>
			</tr>
			<tr>
				<td>Ricardo</td>
				<td>Rodriguez</td>
				<td>Italia</td>
			</tr>
			<tr>
				<td>Edward</td>
				<td>Lopez</td>
				<td>Alemania</td>
			</tr>
			<tr>
				<td>Armando</td>
				<td>Luna</td>
				<td>Mexico</td>
			</tr>
			<tr>
				<td>Luis</td>
				<td>Perez</td>
				<td>EE.UU</td>
			</tr>
			<tr>
				<td>Rosa</td>
				<td>Perez</td>
				<td>EE.UU</td>
			</tr>
			<tr>
				<td>Rosalinda</td>
				<td>Perez</td>
				<td>EE.UU</td>
			</tr>
			<tr>
				<td>Talia</td>
				<td>Perez</td>
				<td>EE.UU</td>
			</tr>
			<tr>
				<td>Brenda</td>
				<td>Perez</td>
				<td>EE.UU</td>

			</tr>
			<tr>
				<td>Estefania</td>
				<td>Perez</td>
				<td>EE.UU</td>
			</tr>
			<tr>
				<td>Cecilia</td>
				<td>Perez</td>
				<td>EE.UU</td>
			</tr>
		</tbody>
	</table>


	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script>
		$(document).ready( function () {
		    $('.AllDataTables').DataTable({
		    	language: {
		    		"sProcessing":     "Procesando...",
				    "sLengthMenu":     "Mostrar _MENU_ registros",
				    "sZeroRecords":    "No se encontraron resultados",
				    "sEmptyTable":     "Ningún dato disponible en esta tabla",
				    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
				    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
				    "sInfoPostFix":    "",
				    "sSearch":         "Buscar:",
				    "sUrl":            "",
				    "sInfoThousands":  ",",
				    "sLoadingRecords": "Cargando...",
				    "oPaginate": {
				        "sFirst":    "Primero",
				        "sLast":     "Último",
				        "sNext":     "Siguiente",
				        "sPrevious": "Anterior"
				    },
				    "oAria": {
				        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
				    }
		    	}
		    });
		} );
	</script>
</body>
</html>
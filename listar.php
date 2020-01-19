<!DOCTYPE html>
<html>
<head>
	<title>Uso de DataTables</title>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>
	<div class="row" style="background: green">
				<h2 style="text-align:center">Curso de PHP y MySQL</h2>
	</div>
<div class="container box">
<table id="tabla" class="display" cellspacing="0" width="100%" >
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			
		</tr>
	</thead>
	<tbody>
</div>
<?php 
require("conexio.php");
$con=Conectar();
$sql="SELECT NOMBRE,APELLIDO FROM docente";
$stmt=$con->prepare($sql);
$result=$stmt->execute();
$rows=$stmt->fetchAll(\PDO::FETCH_OBJ);
foreach ($rows as $rows) {
 	?>
 	<tr>
	<td><?php print(utf8_encode($rows->NOMBRE));?></td>
	<td><?php print(utf8_encode($rows->APELLIDO));?></td>
	
	</tr>
	<?php
 } 
 ?>
<script type="text/javascript">
	$(document).ready(function(){
$('#tabla').DataTable(
{
	"language":{
					"lengthMenu": "Mostrar _MENU_ registros por pagina",
					"info": "Mostrando pagina _PAGE_ de _PAGES_",
						"infoEmpty": "No hay registros disponibles",
						"infoFiltered": "(filtrada de _MAX_ registros)",
						"loadingRecords": "Cargando...",
						"processing":     "Procesando...",
						"search": "Buscar:",
						"zeroRecords":    "No se encontraron registros coincidentes",
						"paginate": {
							"next":       "Siguiente",
							"previous":   "Anterior"
						},					
					},
})
	});
</script>
	</tbody>
</table>
<table>
<tr>
<td>
	<a href="modificar.php?id=<?php echo $row['id']; ?>">
	<span class="glyphicon-pencil"></span></a>
</td>
<td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon  glyphicon-trash"></span></a>
</td>
</tr>
</table>
</script>
</body>
</html>
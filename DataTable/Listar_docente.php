
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Listar_Docente</title>
 	<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min">
 	<!--Plugin de dataTable de jquey-->
 	<script src="js/jquery.dataTables.min"></script>
 	<script src="js/jquery-3.4.1.min">
 		$(document).ready( function () {
    $('#table_id').DataTable();
} );
 	</script>
 </head>
 <body>
 	<?php 
$host="localhost";
$usuario="root";
$password="";
$db="biblioteca";
$conexion=new mysqli($host,$usuario,$password,$db);
if($conexion->connect_errno){
echo"Connection failed a MySQL:(" .$conexion->connect_errno.")".$conexion->connect_error;
}
$ciclos="SELECT NOMBRE,APELLIDO FROM docente";
$res_ciclo=mysqli_query($conexion,$ciclos);
 echo"<table>";
 echo " <thead>";
    echo "<tr>";
 echo "<th>Nombre</th>";
 echo "<th>Apellido</th>";
 echo " </tr>";
echo " </thead>"
echo "<tbody>"
while ($result=mysqli_fetch_assoc($res_ciclo)) {
 echo "<tr>";
	echo "<td>".$result['NOMBRE']."</td>";
	echo "<td>".$result['APELLIDO']."</td>";
	echo "</tr>";
} 
echo "</tbody>"      
echo "</table>";
?>
 </body>
 </html>
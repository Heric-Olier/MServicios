<?PHP 
include('conexion.php');
$idrubro=$_REQUEST['idrubro'];

	$sql="SELECT * FROM especialidades WHERE id_rubro = '$idrubro'";

	$result=mysqli_query($conexion,$sql);
	
	$cadena="<select data-placeholder='Especialidad' class='select-search' name='espec' id='espec'  >";
	
	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena."<option value='".$ver[0]."'>".$ver[2]."</option>";
	}
	echo  $cadena."</select>";

?>
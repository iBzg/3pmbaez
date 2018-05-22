<?php  
 include 'conexion.php';
$conexion = conectar();

if (isset($_POST['Usuario[usuario]']) && !empty($_POST['Usuario[usuario]'])) {
	
} else {
	
  header('Location: index.php');
}
if (isset($_POST['Usuario[nombre]']) && !empty($_POST['Usuario[nombre]'])) {
	$usuNombre = !empty($_POST['Usuario[nombre]']) ? $_POST['Usuario[nombre]'] : '';
	$usuAPaterno = !empty($_POST['Usuario[apaterno]']) ? $_POST['Usuario[apaterno]'] : '';
	$usuAMaterno = !empty($_POST['Usuario[amaterno]']) ? $_POST['Usuario[amaterno]'] : '';
	$usuTel = !empty($_POST['Usuario[telefono]']) ? $_POST['Usuario[telefono]'] : '';
	$usuEmail = !empty($_POST['Usuario[email]']) ? $_POST['Usuario[email]'] : '';
	$sql = "INSERT INTO usuarios(nombre, apaterno, amaterno, telefono, email) VALUES ('$usuNombre', '$usuAPaterno', '$usuAMaterno', '$usuTel', '$usuEmail');";
    $usu = queryPSQL($sql);
	if ($usu) {
    	echo 'Usuario guardado correctamente';
    	header('Location: menu.php');
	} else {
    	echo 'Error al guardar el usuario';
    	header('Location: alta_usuario.php');
	}
}

?>
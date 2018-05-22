<!DOCTYPE html> 
<html>
<head> 
<title>Registro de usuarios</title> 
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--Encabezado-->
    <div id="encabezado">
        <div class="conteiner-fluid">
            <div class="row">
                <div class="col-md-3">
                    <a href="http://unam.mx/" target="_blank"><img src="img/unam.png" alt="unam"></a>
                    <a href="http://www.fca.unam.mx/"><img src="img/fca.png"></a>
                </div>
            </div>
        </div>
    </div>
    <!--Menú-->
    <div class="conteiner-fluid">
        <div id="menu">
            <a href="index.php">Registro</a>
            <a href="contacto.php">Contacto</a>
            <a href="consulta.php">Consulta</a>
            <a href="creditos.php">Créditos</a>            
        </div>
    </div>

  <!--Consulta-->
  <div id="mostrar">
  	<p>Mostrar los usuarios registrados</p>
  	<input type="submit" value="Mostrar" href="peticion_ajax.php">  	
  </div>

  <div>
  	<?php  
include_once 'conexion.php';

$sql = "SELECT
    U.id_usuario,
    U.nombre, U.paterno, U.materno,
    U.email,
    U.telefono, U.email
FROM
    usuarios U
;";

$usuarios = queryPSQL($sql);
?>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Usuario Id:</th>
                    <th>Nombre:</th>
                    <th>Apellido Paterno:</th>
                    <th>Apellido Materno:</th>                    
                    <th>Telefono</th>
                    <th>Email</th>

                </tr>
            </thead>
            <tbody>
                <?php
                while ($usuario = pg_fetch_assoc($usuarios)) :
                    ?>
                    <tr>             
                        <td><?php echo $usuario['id_usuario']; ?></td>
                        <td><?php echo $usuario['paterno']; ?></td>
                        <td><?php echo $usuario['materno']; ?></td>
                        <td><?php echo $usuario['nombre']; ?></td>
                        <td><?php echo $usuario['telefono']; ?></td>
                        <td><?php echo $usuario['email']; ?></td>
                    </tr>
                    <?php
                endwhile;
                 ?>
            </tbody>
        </table>
  </div>
  

</body>
<footer>
        <p>Hecho en México, D.R. © 2018. Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica. De otra forma requiere permiso previo por escrito de la institución. CRÉDITOS. Sitio web administrado por el Centro de Informática de la Facultad de Contaduría y Administración (CIFCA).</p>
</footer>
</html>
<?php 
include 'conexion.php';
$conexion = conectar();
?>
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

    <div>
        <form action="alta_registro.php"> 
                <label for="Usuario[nombre]">Nombre: </label>
                <input id="Usuario[nombre]" name="Usuario[nombre]"></br>
                <label for="Usuario[apaterno]">Apellido paterno:</label>
                <input id="Usuario[apaterno]" name="Usuario[apaterno]"></br>
                <label for="Usuario[amaterno]">Apellido materno:</label>
                <input id="Usuario[amaterno]" name="Usuario[amaterno]"></br>
                <label for="Usuario[usuario]">Usuario: </label>
                <input id="Usuario[telefono]" name="Usuario[telefono]"></br>
                <label for="Usuario[contrasenia]">Contrseña: </label>
                <input id="Usuario[email]" name="Usuario[email]"></br>
                <input type="submit" value="Registrar"> 
    
    </div>

    <!--Me gusta-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="fb-like" data-href="https://www.facebook.com/fca.unam.mx/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
    
</body>
<footer>
        <p>Hecho en México, D.R. © 2018. Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica. De otra forma requiere permiso previo por escrito de la institución. CRÉDITOS. Sitio web administrado por el Centro de Informática de la Facultad de Contaduría y Administración (CIFCA).</p>
</footer>
</html>
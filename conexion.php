<?php
function conectar(){
	$conexion = pg_connect("host=127.0.0.1 port=5432 dbname=3pmbaezDb user=3pmbaez password=");
	return $conexion;
}
?>
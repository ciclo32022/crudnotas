<?php

//print_r($_GET);
if (!isset($_GET["id"])){
    exit();
}

$codigo=$_GET["id"];
include "model/conexion.php";
$sentencia = $conexion->prepare("DELETE FROM alumno WHERE id_alumno = ?;");
$resultado = $sentencia->execute([$codigo]);

if ($resultado === TRUE){
    header("Location: index.php");

}else{
    echo "Error al eliminar";
}
?>
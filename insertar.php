<?php

if (!isset($_POST["oculto"])) {
    exit();

}

include "model/Conexion.php";


$paterno = $_POST["txtPaterno"];
$materno = $_POST["txtMaterno"];
$nombre = $_POST["txtNombre"];
$parcial = $_POST["txtParcial"];
$final = $_POST["txtFinal"];

$sentencia = $conexion->prepare("INSERT INTO alumno (ap_paterno,ap_materno,nombre,ex_parcial,ex_final)VALUES (?,?,?,?,?);");
$resultado = $sentencia->execute([$paterno,$materno,$nombre,$parcial,$final]);

if ($resultado === TRUE){

   // echo "Datos insertados correctamente ";

   //esta linea permite recargar el formulario de ingreso de datos
   header ("location: index.php");

}else {
    echo "Ups Algo salio mal ";
}

?>
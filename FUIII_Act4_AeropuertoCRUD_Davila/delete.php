<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="DELETE FROM avion WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Aviones.php");
    }
?>

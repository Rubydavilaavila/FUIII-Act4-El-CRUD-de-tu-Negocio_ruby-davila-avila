<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$calificacion=$_POST['calificacion'];
$opinion=$_POST['opinion'];
$recomendacion=$_POST['recomendacion'];

$sql="UPDATE avion SET nombre='$nombre',email='$email',calificacion='$calificacion',opinion='$opinion',recomendacion='$recomendacion' WHERE id='$id' ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Aviones.php");
    }
?>
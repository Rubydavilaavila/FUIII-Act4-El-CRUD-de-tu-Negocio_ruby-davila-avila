<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$calificacion=$_POST['calificacion'];
$opinion=$_POST['opinion'];
$recomendacion=$_POST['recomendacion'];


$sql="INSERT INTO avion(nombre, email, calificacion, opinion, recomendacion) 
VALUES ('$nombre','$email','$calificacion','$opinion','$recomendacion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Aviones.php");
    
}else {
}
?>
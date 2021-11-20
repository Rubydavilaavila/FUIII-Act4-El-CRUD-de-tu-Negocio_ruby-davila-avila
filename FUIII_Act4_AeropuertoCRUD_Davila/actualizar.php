<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM avion WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="email" placeholder="Email" value="<?php echo $row['email']  ?>">
                                <input type="text" class="form-control mb-3" name="calificacion" placeholder="Califica nuestros aviones del 1 al 10" value="<?php echo $row['calificacion']  ?>">
                                <input type="text" class="form-control mb-3" name="opinion" placeholder="Escribe tu opinion sobre tu experiencia en nuestros aviones" value="<?php echo $row['opinion']  ?>">
                                <input type="text" class="form-control mb-3" name="recomendacion" placeholder="Recomendarias nuestros aviones si o no" value="<?php echo $row['recomendacion']  ?>">


                            
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>

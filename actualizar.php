<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM empleados WHERE Id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" typt="text/css" href="style.css">
    </head>
    <body>
    <header>
		<div class="wrapp">
			<div class="logo">
			</div>
            <h1 class=titulo>Registro de Empleados-Veterinaria Castillo</h1>
		</div>
	</header>	
                <div class="container mt-5">
                    <form action="update.php" method="POST">

                            <?php echo "<h1>Actualizar datos del empleado: ".$id."</h1>"?>

                 <input type="hidden" name="id" placeholder="Id" value="<?php echo $row['Id']  ?>">

                <input type="text" name="apellidop" placeholder="Apellido paterno" value="<?php echo $row['Apellido paterno']  ?>">

                <input type="text" name="apellidom" placeholder="Apellido materno" value="<?php echo $row['Apellido materno']  ?>">

                <input type="text" name="nombre" placeholder="Nombre(s)" value="<?php echo $row['Nombre(s)']  ?>">

                <input type="date" name="fechadenac" value="<?php echo $row['Fecha de nacimiento']  ?>">

                <input type="text" name="curp" placeholder="Curp" value="<?php echo $row['Curp']  ?>">

                <input type="submit" class="btn btn-primary btn-block" value="Actualizar" >">


                    </form>
                    
                </div>
                <footer>
		<div class="wrapp">
            <p>Castillo Perez Jamila Itzel 5J-No lista 06 </p>
            <p> // SUBMÓDULO 2
                Desarrolla aplicaciones Web con conexión a bases de datos</p>
           <a href="https://github.com/JamilaCastilloPerez">https://github.com/JamilaCastilloPerez</a>
		</div>
	</footer>

    </body>
</html>
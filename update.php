<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$nombre=$_POST['nombre'];
$fechadenac=$_POST['fechadenac'];
$curp=$_POST['curp'];

$sql="UPDATE empleados SET  Apellido paterno='$apellidop',Apellido materno=
'$apellidom',Nombre(s)='$nombre' ,Fecha de nacimiento='$fechadenac',Curp='$curp'
WHERE Id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
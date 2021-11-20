<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$nombre=$_POST['nombre'];
$fechadenac=$_POST['fechadenac'];
$curp=$_POST['curp'];


$sql="INSERT INTO empleados VALUES('$id','$apellidop','$apellidom','$nombre','$fechadenac','$curp')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>
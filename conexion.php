<?php

$con=mysqli_connect('localhost','root','', 'formulario') or die('Error en la conexion servidor');

$sql="INSERT INTO datos
VALUES(null, '".$_POST["nombre"]."','".$_POST["telefono"]."','".$_POST["email"]."','".$_POST["mensaje"]."')";

$resultado=mysqli_query($con,$sql) or die ('Error en el query database');
mysqli_close($con);

echo 'El ingreso es: '.$_POST["nombre"].'<br>';
echo 'El tefefono es: '.$_POST["telefono"].'<br>';
echo 'El correo es: '.$_POST["email"].'<br>';
echo 'El mensaje es: '.$_POST["mensaje"].'<br>';

?>

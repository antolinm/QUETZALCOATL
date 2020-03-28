<?php
$nombre=$_POST['nombre'];
$password=$_POST['password'];

$nombre=stripcslashes($nombre);
$password=stripcslashes($password);
$nombre=mysql_real_escape_string($nombre);
$password=mysql_real_escape_string($password);

include ("conexion.php");

$sentencia="SELECT * FROM `registros` WHERE nombre='$nombre' and password='$password'"
or die("fallo la conexion a base de datos".mysql_error); 
$sentencia->execute();
$fila=mysql_fetch_array($sentencia);
if ($fila['nombre'] == $nombre && $fila['password'] == $password ){
echo "loguiado!!!   Bienvenido".$fila['nombre'];
     header("location:Menu_Administrador.php");
}
else {
    echo "usuario no encontrado";
      header("location:login.html");   
}




?>

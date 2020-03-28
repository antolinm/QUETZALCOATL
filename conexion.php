<?php

$senviador="mysql:dbname=bibliotecaq;host=127.0.0.1";
$usuario="root";
$pasword="";

try{
    $pdo= new PDO($senviador,$usuario,$pasword);
    echo "Conectado...";
    
}catch(PDOException $e){
    echo "Conexion Mala :( ".$e->getMassage();
}






//$conexion = //mysqli_connect("localhost","root","","bibl//iotecaq");
//if(!$conexion){ 
//    echo 'error al conectar la base de datos';
//              }
//else{ 
//    echo 'conectado a la base de datos';
//    }

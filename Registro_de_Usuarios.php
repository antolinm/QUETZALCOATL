<?php 

$id=(isset($_POST['id']))?$_POST['id']:"";
$nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
$password=(isset($_POST['password']))?$_POST['password']:"";
$nivel=(isset($_POST['nivel']))?$_POST['nivel']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include ("conexion.php");

switch($accion){
    case "Regirtrar":
        
        $sentencia=$pdo->prepare("INSERT INTO registros(nombre, password, nivel) 
        VALUES (:nombre,:password,:nivel) ");
        
        $sentencia->bindParam(':nombre',$nombre);
        $sentencia->bindParam(':password',$password);
        $sentencia->bindParam(':nivel',$nivel);
        $sentencia->execute();
        
        header('location: Registro_de_Usuarios.php');
        
        echo $nombre;
        echo "precionaste Regirtrar";    
    break;
    
    case "Modificar":
        
        $sentencia=$pdo->prepare(" UPDATE registros SET
        nombre=:nombre,
        password=:password,
        nivel=:nivel WHERE
        id=:id");
        
        $sentencia->bindParam(':nombre',$nombre);
        $sentencia->bindParam(':password',$password);
        $sentencia->bindParam(':nivel',$nivel);
        $sentencia->bindParam(':id',$id);
        $sentencia->execute();
        
        echo $nombre;
        echo "precionaste Modificar";
    break;
    
    case "Eliminar":
     $sentencia=$pdo->prepare(" DELETE FROM registros WHERE id=:id");
     $sentencia->bindParam(':id',$id);
     $sentencia->execute();  
        
        echo $nombre;
        echo "precionaste liminar";    
    break;
        
    case "Salir":
        header('Location: Menu_Administrador.html');
        echo $nombre;
        echo "precionaste Cancelar";    
    break;
}

    $sentencia= $pdo->prepare("SELECT * FROM `registros` WHERE 1");
    $sentencia->execute();
    $ListaEmpleados=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        
    print_r($ListaEmpleados);
        

?>






<!Doctype html>
<html> 

<head>
    <meta charset="UTF-8">
    <title>Registro de Uarios</title> 
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    
</head>

<body>
   <form action="" method="post" enctype="multipart/form-data">
        <label for="">id:</label>
        <input type="text" name="id" value="<?php echo $id;?>" placeholder="" id="id" require="">
        <br>
       
        <label for="">nombre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre;?>" placeholder="" id="nombre" require="">
        <br>
        
       <label for="">password:</label>
        <input type="text" name="password" value="<?php echo $password;?>" placeholder="" id="password" require="">
        <br>
        
        <label for="">nivel:</label>
        <input type="text" name="nivel" value="<?php echo $nivel;?>" placeholder="" id="nivel" require="">
        <br>
   
            <button value="Regirtrar" type="submit" name="accion">Registrar</button>
            <button value="Modificar" type="submit" name="accion">Modificar</button>
            <button value="Eliminar" type="submit" name="accion">Eliminar</button>
            <button value="Salir" type="submit" name="accion">Salir</button>
    
    </form>

<div class="row">
    
        <table class="table">
            
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>password</th>
                    <th>nivel</th>
                </tr>
            </thead>
        <?php foreach($ListaEmpleados as $empleados){ ?>
               <tr>
                   <td><?php echo $empleados['id']; ?></td>
                   <td><?php echo $empleados['nombre']; ?></td>
                   <td><?php echo $empleados['password']; ?></td>
                   <td><?php echo $empleados['nivel']; ?></td>
                   <td>
                   
                   <form action="" method="post">
                       
                    <input type="hidden" name="id" value="<?php echo  $empleados['id']; ?>" >                      
                    <input type="hidden" name="nombre" value="<?php echo  $empleados['nombre']; ?>" >
                    <input type="hidden" name="password" value="<?php echo  $empleados['password']; ?>" >
                    <input type="hidden" name="nivel" value="<?php echo  $empleados['nivel']; ?>" >
                    
                    <input type="submit" value="Seleccionar" name="accion">
                    
                   </form>
                   
                   
                   
                   </td>
               </tr>
               
        <?php  }  ?>    
            
            
        </table>
</div>

</body>

</html>

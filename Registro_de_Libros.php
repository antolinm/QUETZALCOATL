<?php 

$id=(isset($_POST['id']))?$_POST['id']:"";
$codigo=(isset($_POST['codigo']))?$_POST['codigo']:"";
$nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
$autor=(isset($_POST['autor']))?$_POST['autor']:"";
$categoria=(isset($_POST['categoria']))?$_POST['categoria']:"";
$fotografia=(isset($_POST['fotografia']))?$_POST['fotografia']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include ("conexion.php");

switch($accion){
    case "Regirtrar":
        
        $sentencia=$pdo->prepare("INSERT INTO libros(codigo, nombre, autor, categoria, fotografia) VALUES (:codigo,:nombre,:autor,:categoria,:fotografia) ");
        
        $sentencia->bindParam(':codigo',$codigo);
        $sentencia->bindParam(':nombre',$nombre);
        $sentencia->bindParam(':autor',$autor);
        $sentencia->bindParam(':categoria',$categoria);
        $sentencia->bindParam(':fotografia',$fotografia);
        $sentencia->execute();
        
        header('location: Registro_de_Libros.php');
        
        echo $nombre;
        echo "precionaste Regirtrar";    
    break;
    
    case "Modificar":
        
        $sentencia=$pdo->prepare(" UPDATE libros SET
        codigo=:codigo,
        nombre=:nombre,
        autor=:autor,
        categoria=:categoria,
        fotografia=:fotografia WHERE
        id=:id");
        
        $sentencia->bindParam(':codigo',$codigo);
        $sentencia->bindParam(':nombre',$nombre);
        $sentencia->bindParam(':autor',$autor);
        $sentencia->bindParam(':categoria',$categoria);
        $sentencia->bindParam(':fotografia',$fotografia);
        $sentencia->bindParam(':id',$id);
        $sentencia->execute();
        
        header('location: Registro_de_Libros.php');
        
        echo $nombre;
        echo "precionaste Modificar";
    break;
    
    case "Eliminar":
     $sentencia=$pdo->prepare(" DELETE FROM libros WHERE id=:id");
     $sentencia->bindParam(':id',$id);
     $sentencia->execute();  
        
        echo $id;
        echo "precionaste liminar";    
    break;
        
    case "Salir":
        header('Location: Menu_Administrador.html');
        echo $nombre;
        echo "precionaste Cancelar";    
    break;
}

    $sentencia= $pdo->prepare("SELECT * FROM `libros` WHERE 1");
    $sentencia->execute();
    $ListaEmpleados=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        
    print_r($ListaEmpleados);
        

?>






<!Doctype html>
<html> 

<head>
    <meta charset="UTF-8">
    <title>Registro de Libros</title> 
</head>

<body>
   <form action="" method="post" enctype="multipart/form-data">
        <label for="">Id:</label>
        <input type="text" name="id" value="<?php echo $id;?>" placeholder="" id="id" require="">
        <br>
       
        <label for="">Codigo:</label>
        <input type="text" name="codigo" value="<?php echo $codigo;?>" placeholder="" id="codigo" require="">
        <br>
        
       <label for="">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre;?>" placeholder="" id="nombre" require="">
        <br>
        
        <label for="">Autor:</label>
        <input type="text" name="autor" value="<?php echo $autor;?>" placeholder="" id="autorl" require="">
        <br>

        <label for="">Categoria:</label>
        <input type="text" name="categoria" value="<?php echo $categoria;?>" placeholder="" id="categoria" require="">
        <br>   
                
        <label for="">Fotografia:</label>
        <input type="text" name="fotografia" value="<?php echo $fotografia;?>" placeholder="" id="fotografia" require="">
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
                    <th>codigo</th>
                    <th>nombre</th>
                    <th>autor</th>
                    <th>categoria</th>
                    <th>fotografia</th>
                </tr>
            </thead>
        <?php foreach($ListaEmpleados as $empleados){ ?>
               <tr>
                   <td><?php echo $empleados['id']; ?></td>
                   <td><?php echo $empleados['codigo']; ?></td>
                   <td><?php echo $empleados['nombre']; ?></td>
                   <td><?php echo $empleados['autor']; ?></td>
                   <td><?php echo $empleados['categoria']; ?></td>
                   <td><?php echo $empleados['fotografia']; ?></td>
                   <td>
                   
                   <form action="" method="post">
                       
                    <input type="hidden" name="id" value="<?php echo  $empleados['id']; ?>" >                      
                    <input type="hidden" name="codigo" value="<?php echo  $empleados['codigo']; ?>" >
                    <input type="hidden" name="nombre" value="<?php echo  $empleados['nombre']; ?>" >
                    <input type="hidden" name="autor" value="<?php echo  $empleados['autor']; ?>" >
                    <input type="hidden" name="categoria" value="<?php echo  $empleados['categoria']; ?>" >
                    <input type="hidden" name="fotografia" value="<?php echo  $empleados['fotografia']; ?>" >
                    
                    <input type="submit" value="Seleccionar" name="accion">
                    
                   </form>
                   
                   
                   
                   </td>
               </tr>
               
        <?php  }  ?>    
            
            
        </table>
</div>

</body>

</html>
  
<?php 

$id=(isset($_POST['id']))?$_POST['id']:"";
$matricula=(isset($_POST['matricula']))?$_POST['matricula']:"";
$nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
$apellido_p=(isset($_POST['apellido_p']))?$_POST['apellido_p']:"";
$apellido_m=(isset($_POST['apellido_m']))?$_POST['apellido_m']:"";
$grado=(isset($_POST['grado']))?$_POST['grado']:"";
$fecha_nac=(isset($_POST['fecha_nac']))?$_POST['fecha_nac']:"";
$direccion=(isset($_POST['direccion']))?$_POST['direccion']:"";
$telefono=(isset($_POST['telefono']))?$_POST['telefono']:"";
$fotografia=(isset($_POST['fotografia']))?$_POST['fotografia']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include ("conexion.php");

switch($accion){
    case "Regirtrar":
        
        $sentencia=$pdo->prepare("INSERT INTO alumnos(matricula, nombre, apellido_p, apellido_m, grado, fecha_nac, direccion, telefono, fotografia) VALUES (:matricula, :nombre,:apellido_p,:apellido_m,:grado,:fecha_nac,:direccion,:telefono,:fotografia)");
        
        $sentencia->bindParam(':matricula',$matricula);
        $sentencia->bindParam(':nombre',$nombre);
        $sentencia->bindParam(':apellido_p',$apellido_p);
        $sentencia->bindParam(':apellido_m',$apellido_m);
        $sentencia->bindParam(':grado',$grado);
        $sentencia->bindParam(':fecha_nac',$fecha_nac);
        $sentencia->bindParam(':direccion',$direccion);
        $sentencia->bindParam(':telefono',$telefono);
        $sentencia->bindParam(':fotografia',$fotografia);
        $sentencia->execute();
        
        header('location: Registro_de_alumnos.php');
        
        echo $nombre;
        echo "precionaste Regirtrar";    
    break;
    
    case "Modificar":
        
        $sentencia=$pdo->prepare(" UPDATE alumnos SET
        matricula=:matricula,
        nombre=:nombre,
        apellido_p=:apellido_p,
        apellido_m=:apellido_m,
        grado=:grado,
        fecha_nac=:fecha_nac,
        direccion=:direccion,
        telefono=:telefono,
        fotografia=:fotografia WHERE
        id=:id");
        
        $sentencia->bindParam(':matricula',$matricula);
        $sentencia->bindParam(':nombre',$nombre);
        $sentencia->bindParam(':apellido_p',$apellido_p);
        $sentencia->bindParam(':apellido_m',$apellido_m);
        $sentencia->bindParam(':grado',$grado);
        $sentencia->bindParam(':fecha_nac',$fecha_nac);
        $sentencia->bindParam(':direccion',$direccion);
        $sentencia->bindParam(':telefono',$telefono);
        $sentencia->bindParam(':fotografia',$fotografia);
        $sentencia->bindParam(':id',$id);
        $sentencia->execute();
        
        header('location: Registro_de_alumnos.php');
        
        echo $nombre;
        echo "precionaste Modificar";
    break;
    
    case "Eliminar":
     $sentencia=$pdo->prepare(" DELETE FROM alumnos WHERE id=:id");
     $sentencia->bindParam(':id',$id);
     $sentencia->execute();  
        
         header('location: Registro_de_alumnos.php');
        
        echo $id;
        echo "precionaste liminar";    
    break;
        
    case "?Cancelar?":
        header('Location: Menu_Administrador,php');
        echo $nombre;
        echo "precionaste Cancelar";    
    break;
}

    $sentencia= $pdo->prepare("SELECT * FROM `alumnos` WHERE 1");
    $sentencia->execute();
    $Lista=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        
    print_r($Lista);
        

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
       
        <label for="">Matricula:</label>
        <input type="text" name="matricula" value="<?php echo $matricula;?>" placeholder="" id="matricula" require="">
        <br>
        
       <label for="">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre;?>" placeholder="" id="nombre" require="">
        <br>
        
        <label for="">Apellido_p:</label>
        <input type="text" name="apellido_p" value="<?php echo $apellido_p;?>" placeholder="" id="apellido_p" require="">
        <br>

        <label for="">Apellido_m:</label>
        <input type="text" name="apellido_m" value="<?php echo $apellido_m;?>" placeholder="" id="apellido_m" require="">
        <br>     
                
        <label for="">Grado:</label>
        <input type="text" name="grado" value="<?php echo $grado;?>" placeholder="" id="grado" require="">
        <br>
       <label for="">Fecha_nac:</label>
        <input type="text" name="fecha_nac" value="<?php echo $fecha_nac;?>" placeholder="" id="fecha_nac" require="">
        <br>
        
        <label for="">Direccion:</label>
        <input type="text" name="direccion" value="<?php echo $direccion;?>" placeholder="" id="direccion" require="">
        <br>

        <label for="">Telefono:</label>
        <input type="text" name="telefono" value="<?php echo $telefono;?>" placeholder="" id="telefono" require="">
        <br>   
                
        <label for="">Fotografia:</label>
        <input type="text" name="fotografia" value="<?php echo $fotografia;?>" placeholder="" id="fotografia" require="">
        <br>                
                                
                 
            <button value="Regirtrar" type="submit" name="accion">Registrar</button>
            <button value="Modificar" type="submit" name="accion">Modificar</button>
            <button value="Eliminar" type="submit" name="accion">Eliminar</button>
            <button value="salir" type="submit" name="accion">Salir</button>
    
    </form>

<div class="row">
    
        <table class="table">
            
            <thead>
                <tr>
                    <th>id</th>
                    <th>matricula</th>
                    <th>nombre completo</th>
                    <th>grado</th>
                    <th>fecha_nac</th>
                    <th>direccion</th>
                    <th>telefono</th>
                    <th>fotografia</th>
                </tr>
            </thead>
        <?php foreach($Lista as $alumnos){ ?>
               <tr>
                   <td><?php echo $alumnos ['id']; ?></td>
                   <td><?php echo $alumnos ['matricula']; ?></td>
                   <td><?php echo $alumnos ['nombre']; ?> <?php echo $alumnos ['apellido_p']; ?> <?php echo $alumnos ['apellido_m']; ?></td>
                   <td><?php echo $alumnos ['grado']; ?></td>
                   <td><?php echo $alumnos ['fecha_nac']; ?></td>
                   <td><?php echo $alumnos ['direccion']; ?> </td>
                   <td><?php echo $alumnos ['telefono']; ?></td>
                   <td><?php echo $alumnos ['fotografia']; ?></td>
                   <td>
                   
                   <form action="" method="post">
                       
                    <input type="hidden" name="id" value="<?php echo  $alumnos ['id']; ?>" >                 
                    <input type="hidden" name="matricula" value="<?php echo  $alumnos ['matricula']; ?>" >
                    <input type="hidden" name="nombre" value="<?php echo  $alumnos ['nombre']; ?>" >
                    <input type="hidden" name="apellido_p" value="<?php echo  $alumnos ['apellido_p']; ?>" >
                    <input type="hidden" name="apellido_m" value="<?php echo  $alumnos ['apellido_m']; ?>" >
                    <input type="hidden" name="grado" value="<?php echo  $alumnos ['grado']; ?>" >
                    <input type="hidden" name="fecha_nac" value="<?php echo  $alumnos ['fecha_nac']; ?>" >
                    <input type="hidden" name="direccion" value="<?php echo  $alumnos ['direccion']; ?>" >
                    <input type="hidden" name="telefono" value="<?php echo  $alumnos ['telefono']; ?>" >
                    <input type="hidden" name="fotografia" value="<?php echo  $alumnos ['fotografia']; ?>" >
                    
                    
                    <input type="submit" value="Seleccionar" name="accion">
                    
                   </form>
                   
                   
                   
                   </td>
               </tr>
               
        <?php  }  ?>    
            
            
        </table>
</div>

</body>

</html>
  
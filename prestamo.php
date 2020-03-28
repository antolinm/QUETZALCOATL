<?php 
$codigo=(isset($_POST['codigo']))?$_POST['codigo']:"";
$matricula=(isset($_POST['matricula']))?$_POST['matricula']:"";

include ("conexion.php");


            $sentencia=$pdo->prepare("SELECT * FROM libros WHERE codigo ='$codigo'");
            $sentencia->execute();
            $ListaEmpleados=$sentencia->fetchAll(PDO::FETCH_ASSOC); 
            print_r($ListaEmpleados);

            $sentenci=$pdo->prepare("SELECT * FROM alumnos WHERE matricula ='$matricula'");
            $sentenci->execute();
            $Lista=$sentenci->fetchAll(PDO::FETCH_ASSOC); 
            print_r($Lista);    

?>







<!Doctype html>
<html> 

<head>
    <meta charset="UTF-8">
    <title>Registro de Prestamos</title> 
</head>      
<body>  

     <form action="" method="post" enctype="multipart/form-data">
        <label for="">Codigo:</label>
        <input type="text" name="codigo" value="<?php echo $codigo;?>" placeholder="" id="codigo" require="">
        <br>
           
        <label for="">Matricula:</label>
        <input type="text" name="matricula" value="<?php echo $matricula;?>" placeholder="" id="matricula" require="">
        <br>   
           
        <button value="Buscar" type="submit" name="accion">Buscar</button>
            
<br>
   
    <table>
            
        <thead>
            <tr>
                <td>id</td>
                <td>codigo</td>
                <td>nombre</td>
                <td>autor</td>
                <td>categoria</td>
                <td>fotografia</td>
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
        <?php
        }
        ?>
        </table>
        

<br>
    
        <table>
            
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
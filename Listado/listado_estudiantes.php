
<!-- copyring moises-canaria
copyring moises-canaria
copyring moises-canaria
copyring moises-canaria -->
<table class="table  table-bordered table-dark table-hover table-responsive "  >
  <thead class="thead-light">
      <tr>
      <b>  <th scope="col"  >Id</th>
      <b>  <th scope="col"  >Cedula</th>
        <th scope="col" >Nombre</th>
        <th scope="col" >Apellido</th>
        <th scope="col" >Telefono</th>
        <th scope="col" >Direccion</th>
        <th scope="col" >F_nacimiento</th>
        <th scope="col" >Ciudad</th>
        <th scope="col" >Email</th>
        <th scope="col" >Programa</th>
        <th scope="col" >sede</th>
        <th scope="col" >Rol</th>
        <th scope="col" >Modalidad</th>
        <!-- <th colspan="2" >Opciones</th> -->
      </tr>
  </thead>
      <h1 class="text-center">LISTADO DE ESTUDIANTES</h1> </b>
     <form class="form-inline my-2 my-lg-0" method="post" action="index.php?page=estudiantes">
     <center> <input class="form-control mr-sm-2" type="search" placeholder="Busqueda" aria-label="Search" name="query" id="query" style="text-align:center">
        <button class="btn btn-success w-100" type="submit">Buscar</button>
    </form>
      <?php
        require ('src/conexion.php');
        
          if(isset($_POST['query'])){
            //Buscame y muestrame los que coincida con los datos de la tabla
            $query = "SELECT * FROM estudiante WHERE Id_estudiante LIKE '%".$_POST['query']."%' OR cedula LIKE '%".$_POST['query']."%' OR Nombre LIKE '%".$_POST['query']."%' 
            OR Telefono LIKE '%".$_POST['query']."%' OR F_nacimiento LIKE '%".$_POST['query']."%' OR Ciudad LIKE '%".$_POST['query']."%'" ;
          } else {
            //muestrame todos los datos de la tabla
            $query = "SELECT * FROM estudiante";
          }
          $resultado = $miconexion->query($query);
          //numero de filas de la consulta en la busqueda
          $contadorF = mysqli_num_rows($resultado);
          //Si no existe un resultado en la busqueda dime que no hay resultados
          if ($contadorF==0) {
            echo "<h3 class='text-center'>No existen registros para la consulta.</h3>";
          }     
          //Recorre todos los datos que estan mi base de datos  como un array asociativo
          while ($datos = $resultado->fetch_assoc()) {
          ?>          
            <tr>
              <!-- muetrame todo lo que tengo en mi base de datos -->
                <td ><?php echo $datos['Id_Estudiante']; ?> </td>
                <td> <?php echo $datos['Cedula']; ?></td>
                <td ><?php echo $datos['Nombre']; ?> </td>
                <td> <?php echo $datos['Apellido']; ?></td> 
                <td> <?php echo $datos['Telefono']; ?></td> 
                <td> <?php echo $datos['Direccion']; ?></td> 
                <td> <?php echo $datos['F_nacimiento']; ?></td> 
                <td> <?php echo $datos['Ciudad']; ?></td> 
                <td> <?php echo $datos['Email']; ?></td> 
                <!-- <td> <?php echo $datos['contraseña']; ?></td>  -->
                <td> 
                 <?php 
                 $sql=$miconexion->query("SELECT * FROM programa WHERE Id_Programa='".$datos['Id_Programa']."'");
                 while($fila=$sql->fetch_array()){
                   echo "".$fila['Nombre_p']."" ;
                 }
                ?>
                
                <td> 
                <?php 
                 $sql=$miconexion->query("SELECT * FROM sede WHERE Id_Sede='".$datos['Id_Sede']."'");
                 while($fila=$sql->fetch_array()){
                   echo  "".$fila['Nombre']." <b style='color: #f00;'>(".$fila['Ciudad'].")</b> ";
                 }
                ?>
                </td> 
                
                <td> <?php echo $datos['R_estudiante']; ?></td> 
                <td>   <?php 
                 $sql=$miconexion->query("SELECT * FROM programa WHERE Id_Programa='".$datos['Id_Programa']."'");
                 while($fila=$sql->fetch_array()){
                   echo "".$fila['Modalidad']."" ;
                 }
                ?></td> 
                
                <!-- muestrame los datos que coinciden con el id en la tabla -->
                <!-- <td> <a class="btn btn-danger  w-100"  role="button" href="Eliminar/eliminar.php?id=<?php echo $datos['Id_Estudiante'] ?>">Eliminar</a></td> -->
                <!-- recibe el id  que coincida con los datos de la tabla y llevame al formulario de actualizar -->
                <!-- <td><a class="btn btn-success w-100"  role="button" href="Actualizar/actualizar.php?id=<?php echo $datos['Id_Estudiante'] ?>">Actualizar</a></td> -->
              </tr>
            <?php  
            }
            
            ?>
             
          

                    
  
  </table>
  <style type="text/css">
   .imagenindex {
     display: none;
   }
    td, th{
     border: solid 3px;
     text-align: center;
   
   }
   
  
   
    
    /* copyring moises-canaria
copyring moises-canaria
copyring moises-canaria
copyring moises-canaria  */
  
  
   </style>
  
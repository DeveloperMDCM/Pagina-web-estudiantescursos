
<!-- copyring moises-canaria
copyring moises-canaria
copyring moises-canaria


copyring moises-canaria -->
<table class="table table-bordered table-dark table-responsive"  >
  
  <thead class="thead-light ">
      <tr>
      <b>  <th scope="col"  >Id</th>
        <th scope="col " >Cedula</th>
        <th scope="col" >Nombre</th>
        <th scope="col" >Apellido</th>
        <th scope="col" >Telefono</th>
        <th scope="col" >Direccion</th>
        <th scope="col" >Email</th>
        <!-- <th scope="col" >Contraseña</th> -->
        <th scope="col" >Nacimiento</th>
        <th scope="col" >ciudad</th>
        <th scope="col" >Sede</th>
        <th scope="col" >Rol</th>
        <!-- <th colspan="2" >Opciones</th> -->
      </tr>
  </thead>
      <h1 class="text-center">LISTADO DE ADMINISTRATIVOS</h1> </b>
      <form class="form-inline my-2 my-lg-0" method="post" action="index.php?page=administrativos">
     <center> <input class="form-control mr-sm-2" type="search" placeholder="Busqueda" aria-label="Search" name="query" id="query" style="text-align:center">
        <button class="btn btn-success w-100" type="submit">Buscar</button>
    </form>

      <?php
        require ('src/conexion.php');
        
          if(isset($_POST['query'])){
            //Buscame y muestrame los que coincida con los datos de la tabla
            $query = "SELECT * FROM p_administrativo WHERE Id_personal LIKE '%".$_POST['query']."%' OR Cedula LIKE '%".$_POST['query']."%' OR Nombre LIKE '%".$_POST['query']."%'
             OR R_Padministrativo LIKE '%".$_POST['query']."%' OR Email LIKE '%".$_POST['query']."%'" ;
          } else {
            //muestrame todos los datos de la tabla
            $query = "SELECT * FROM p_administrativo";
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
                <td ><?php echo $datos['Id_personal']; ?> </td>
                <td> <?php echo $datos['Cedula']; ?></td>
                <td ><?php echo $datos['Nombre']; ?> </td>
                <td> <?php echo $datos['Telefono']; ?></td> 
                <td> <?php echo $datos['Apellido']; ?></td> 
                <td> <?php echo $datos['Direccion']; ?></td> 
                <td> <?php echo $datos['Email']; ?></td> 
                <!-- <td> <?php echo $datos['contraseña']; ?></td>  -->
                <td> <?php echo $datos['F_nacimiento']; ?></td> 
                <td> <?php echo $datos['Ciudad']; ?></td> 
                <td> 
                <?php 
                 $sql=$miconexion->query("SELECT * FROM sede WHERE Id_sede='".$datos['Id_sede']."'");
                 while($fila=$sql->fetch_array()){
                  echo  "".$fila['Nombre']." <b style='color: #000;'>(".$fila['Ciudad'].")</b> ";
                 }
                ?>
                </td> 
                <td> <?php echo $datos['R_Padministrativo']; ?></td> 
                <!-- muestrame los datos que coinciden con el id en la tabla -->
                <!-- <td> <a class="btn btn-danger  w-100"  role="button" href="eliminar.php?id=<?php echo $datos['Id_personal'] ?>">Eliminar</a></td> -->
                <!-- recibe el id  que coincida con los datos de la tabla y llevame al formulario de actualizar -->
                <!-- <td><a class="btn btn-success w-100"  role="button" href="actualizar.php?id=<?php echo $datos['Id_personal'] ?>">Actualizar</a></td> -->
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
  
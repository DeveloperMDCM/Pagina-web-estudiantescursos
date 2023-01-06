
<!-- copyring moises-canaria
copyring moises-canaria
copyring moises-canaria
copyring moises-canaria -->
<table class="table  table-bordered table-dark table-hover table-responsive-md  "  >
  <thead class="thead-light">
      <tr>
      <b>  <th scope="col"  >Id</th>
        <th scope="col" >Nombre</th>
        <th scope="col" >Semestres</th>
        <th scope="col" >Modalidad</th>
        <th scope="col" >Facultad</th>
        <th scope="col" >Sede</th>
        <th scope="col" >Precio</th>
        <!-- <th colspan="2" >Opciones</th> -->
      </tr>
  </thead>
      <h1 class="text-center">LISTADO DE PROGRAMAS</h1> </b>
     <form class="form-inline my-2 my-lg-0" method="post" action="index.php?page=programas">
     <center> <input class="form-control mr-sm-2" type="search" placeholder="Busqueda" aria-label="Search" name="query" id="query" style="text-align:center">
        <button class="btn btn-success w-100" type="submit">Buscar</button>
    </form>
      <?php
        require ('src/conexion.php');
        
          if(isset($_POST['query'])){
            //Buscame y muestrame los que coincida con los datos de la tabla
            $query = "SELECT * FROM programa WHERE Id_Faculta LIKE '%".$_POST['query']."%'
            OR Nombre_p LIKE '%".$_POST['query']."%' OR Id_Programa LIKE '%".$_POST['query']."%' OR Precio LIKE '%".$_POST['query']."%'" ;
          } else {
            //muestrame todos los datos de la tabla
            $query = "SELECT * FROM programa";
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
                <td ><?php echo $datos['Id_Programa']; ?> </td>
                <td> <?php echo $datos['Nombre_p']; ?></td>
                <td ><?php echo $datos['Num_semestre']; ?> </td>
                <td> <?php echo $datos['Modalidad']; ?></td> 
                <td> 
                <?php 
                 $sql=$miconexion->query("SELECT * FROM facultad WHERE Id_Facultad='".$datos['Id_Faculta']."'");
                 while($fila=$sql->fetch_array()){
                   echo "".$fila['Nombre']."" ;
                 }
                ?>
                </td>
                <td> 
                <?php 
                 $sql=$miconexion->query("SELECT * FROM sede WHERE Id_Sede='".$datos['Id_Faculta']."'");
                 while($fila=$sql->fetch_array()){
                   echo  "".$fila['Nombre']." <b style='color: #000;'>(".$fila['Ciudad'].")</b> ";
                 }
                ?>
                </td>  
                <td> <?php 
                echo $datos['Precio']; ?></td> 
                 
                <!-- muestrame los datos que coinciden con el id en la tabla -->
                <!-- <td> <a class="btn btn-danger  w-100"  role="button" href="Eliminar/eliminar.php?id=<?php echo $datos['Id_Programa'] ?>">Eliminar</a></td> -->
                <!-- recibe el id  que coincida con los datos de la tabla y llevame al formulario de actualizar -->
                <!-- <td><a class="btn btn-success w-100"  role="button" href="Actualizar/actualizar.php?id=<?php echo $datos['Id_Programa'] ?>">Actualizar</a></td> -->
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
  
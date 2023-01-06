
<!-- copyring moises-canaria
copyring moises-canaria
copyring moises-canaria


copyring moises-canaria -->
<table class="table  table-bordered table-dark table-hover  "  >
  <thead class="thead-light">
      <tr>
      <b>  <th scope="col"  >Id</th>
        <th scope="col" >Nombre</th>
        <!-- <th colspan="2" >Opciones</th> -->
      </tr>
  </thead>
  
      <h1 class="text-center ">LISTADO DE FACULTADES</h1> </b>
      <form class="form-inline my-2 my-lg-0 " method="post" action="index.php?page=facultades">
     <center> <input class="form-control mr-sm-2" type="search" placeholder="Busqueda" aria-label="Search" name="query" id="query" style="text-align:center">
        <button class="btn btn-success w-100" type="submit">Buscar</button>
    </form>

  
      <?php
        require ('src/conexion.php');
        
          if(isset($_POST['query'])){
            //Buscame y muestrame los que coincida con los datos de la tabla
            $query = "SELECT * FROM facultad WHERE Id_Facultad LIKE '%".$_POST['query']."%' OR Nombre LIKE '%".$_POST['query']."%' OR Modalidad LIKE '%".$_POST['query']."%' OR Nombre_p LIKE '%".$_POST['query']."%'" ;
            
          } else {
            //muestrame todos los datos de la tabla
            $query = "SELECT * FROM facultad";
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
                <td ><?php echo $datos['Id_Facultad']; ?> </td>
                <td> <?php echo $datos['Nombre']; ?></td>
                
                <!-- muestrame los datos que coinciden con el id en la tabla -->
                <!-- <td> <a class="btn btn-danger  w-100"  role="button" href="Eliminar/eliminar.php?id=<?php echo $datos['Id_Facultad'] ?>">Eliminar</a></td> -->
                <!-- recibe el id  que coincida con los datos de la tabla y llevame al formulario de actualizar -->
                <!-- <td><a class="btn btn-success w-100"  role="button" href="Actualizar/actualizar.php?id=<?php echo $datos['Id_Facultad'] ?>">Actualizar</a></td> -->
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
  
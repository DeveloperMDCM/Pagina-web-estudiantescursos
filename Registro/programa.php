
<style type="text/css">
 .imagenindex {
   display: none;
 }
 </style>

<?php 
 include ('src/conexion.php');
 

?>

<h1 class="text-center">NUEVO PROGRAMA</h1>
<form  class="formulario" action="Guardar/g_programa.php" method="post" >

    <div class="card" style="width: 21rem;">
<div class="card-body ">
       
        <div><span>Nombre: <input required    autofocus    placeholder="Nombre del programa" class="form-control " type="text" name="Nombre_p" ></span></div>
        <div><span>Semestres: <input required    autofocus    placeholder="Semestres" class="form-control " type="number"  name="Num_semestre" ></span></div>
        <div><span>Modalidad: 
        <select  class="custom-select " name="Modalidad" required autofocus >
            <option value="">Seleccione modalidad</option>
            <option value="Presencial">Presencial</option>
            <option value="Distancia">A Distancia</option>
            <option value="Educacion continua">Educacion continua</option>
        </select>   
        </span></div>
        <span>Faculdad: </span>
        <select  class="custom-select  mb-4 " name="Facultad"  autofocus  >
           <?php 
           $sql=$miconexion->query("SELECT * FROM `facultad`");
           while($fila=$sql->fetch_array()){
             echo "<option value='".$fila['Id_Facultad']."'>".$fila['Nombre']."</option>";
           }           
           ?>
        </select> 
        <div><span>Precio: <input required    autofocus    placeholder="Costo" class="form-control " type="number" min="0.00" max="5000000.00" step="0.01" name="Precio" ></span></div> 
       <br>
        <button type="submit" name="enviar" class="btn btn-success w-100 ">Registrar</button>
       </div>
       </form>
       <!-- copyring moises-canaria
copyring moises-canaria
copyring moises-canaria
copyring moises-canaria
copyring moises-canaria
copyring moises-canaria
copyring moises-canaria -->
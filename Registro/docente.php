
<style type="text/css">
 .imagenindex {
   display: none;
 }
 </style>

<?php 
 include ('src/conexion.php');
 

?>

<h1 class="text-center">NUEVO DOCENTE</h1>
<form  class="formulario" action="Guardar/g_docente.php" method="post" >

    <div class="card" style="width: 21rem;">
<div class="card-body ">
       
        <div><span>Cedula: <input required    autofocus    placeholder="Cedula" class="form-control " type="text" name="Cedula" ></span></div>
        <div><span>Nombre: <input required    autofocus    placeholder="Nombres" class="form-control " type="text" name="Nombres" ></span></div>
        <div><span>Apellido: <input required    autofocus    placeholder="Apellidos" class="form-control " type="text" name="Apellidos" ></span></div>
        <div><span>Telefono: <input required    autofocus    placeholder="Telefono" class="form-control " type="text" name="Telefono" ></span></div>
        <div><span>Direccion: <input required    autofocus    placeholder="Direccion" class="form-control " type="text" name="Direccion" ></span></div>
        <div><span>Email: <input required    autofocus    placeholder="Email" class="form-control " type="text" name="Email" ></span></div>
        <div><span>F_nacimiento: <input required    autofocus    placeholder="F_nacimiento" class="form-control " type="date" name="F_nacimiento" ></span></div>
        <div><span>Ciudad: <input required    autofocus    placeholder="Ciudad" class="form-control " type="text" name="Ciudad" ></span></div>
        <span>Programa:</span>
        <select  class="custom-select  mb-4 " name="Programa"  autofocus  >
           <?php 
           $sql=$miconexion->query("SELECT * FROM `programa`");
           while($fila=$sql->fetch_array()){
             echo "<option value='".$fila['Id_Programa']."'>".$fila['Nombre_p']."</option>";
           }           
           ?>
        </select> 
        <span>Sede: </span>
        <select  class="custom-select  mb-4 " name="Sede"  autofocus  >
           <?php 
           $sql=$miconexion->query("SELECT * FROM `sede`");
           while($fila=$sql->fetch_array()){
             echo "<option value='".$fila['Id_sede']."'>".$fila['Nombre']."</option>";
           }           
           ?>
        </select> 
        <span>Contratacion:</span>
        <select  class="custom-select  mb-4 " name="Contratacion"  autofocus  >
           <?php 
           $sql=$miconexion->query("SELECT * FROM `contratacion`");
           while($fila=$sql->fetch_array()){
             echo "<option value='".$fila['Id_contratacion']."'>".$fila['Tiempo']."</option>";
           }           
           ?>
        </select> 
       
        <span>Rol:</span>
        <select  class="custom-select  mb-4 " name="Rol"  autofocus  value="<?php echo $datos['rol_docente']; ?>">
           <?php 
           $sql=$miconexion->query("SELECT * FROM `Role` WHERE id_rol = '2' ");
           while($fila=$sql->fetch_array()){
             echo "<option value='".$fila['Rol']."'>".$fila['Rol']."</option>";
           }           
           ?>
        </select> 
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
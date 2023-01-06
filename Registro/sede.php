
<style type="text/css">
 .imagenindex {
   display: none;
 }
 </style>

<?php 
 include ('src/conexion.php');
?>

<h1 class="text-center">NUEVA SEDE</h1>
<form  class="formulario" action="Guardar/g_sede.php" method="post" >

    <div class="card" style="width: 21rem;">
<div class="card-body ">
       
        <div><span>Nombre: <input required    autofocus    placeholder="Nombre" class="form-control " type="text" name="Nombre" ></span></div>
        <div><span>Ciudad: <input required    autofocus    placeholder="Ciudad" class="form-control " type="text" name="Ciudad" ></span></div>
        <div><span>Apellido: <input required    autofocus    placeholder="Direccion" class="form-control " type="text" name="Direccion" ></span></div>
        <div><span>Telefono: <input required    autofocus    placeholder="Telefono" class="form-control " type="number" name="Telefono" ></span></div>
        <div><span>Email: <input required    autofocus    placeholder="Email" class="form-control " type="email" name="Email" ></span></div>
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

<?php
//   copyring moises-canaria
//   copyring moises-canaria
//   copyring moises-canaria
//   copyring moises-canaria
//   copyring moises-canaria
//   copyring moises-canaria
//   copyring moises-canaria
    include '../src/conexion.php'; 
    $infomacion =[
      $Nombre = $_POST['Nombre'],
      $Ciudad = $_POST['Ciudad'],
      $Direccion = $_POST['Direccion'],
      $Telefono = $_POST['Telefono'],
      $Email = $_POST['Email']
    ];
    //Guardame los datos de mi formulario de registro que recibo por post
    $query = "INSERT INTO `sede_principal`.`sede` (Nombre, Ciudad, Direccion, Telefono, Email) VALUES('$Nombre' , '$Ciudad' , '$Direccion' , '$Telefono' , '$Email')";
    $resultado = $miconexion->query($query);
    if ($resultado) {
        //Si se crea un nuevo registro mandame al listado de registro
        header("location: ../index.php?page=sedes");
    }
?>



 
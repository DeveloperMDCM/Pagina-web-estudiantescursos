
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
      $Cedula = $_POST['Cedula'],
      $Nombre = $_POST['Nombre'],
      $Apellido = $_POST['Apellido'],
      $Telefono = $_POST['Telefono'],
      $F_nacimiento = $_POST['F_nacimiento'],
      $Ciudad = $_POST['Ciudad'],
      $Email = $_POST['Email'],
      $Programa = $_POST['Programa'],
      $Sede = $_POST['Sede'],
      $Rol = $_POST['Rol']
    ];
    //Guardame los datos de mi formulario de registro que recibo por post
    $query = "INSERT INTO `sede_principal`.`estudiante`(Cedula,
    Nombre,
    Apellido,
    Telefono,
    F_nacimiento,
    Ciudad,
    Email,
    Id_programa,
    Id_sede,
    R_estudiante) VALUES('$Cedula','$Nombre','$Apellido','$Telefono','$F_nacimiento','$Ciudad','$Email','$Programa','$Sede','$Rol')";
    $resultado = $miconexion->query($query);
    if ($resultado) {
        //Si se crea un nuevo registro mandame al listado de registro
        header("location: ../index.php?page=estudiantes");
    }
?>



 
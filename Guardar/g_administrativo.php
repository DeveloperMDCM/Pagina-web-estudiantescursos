
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
      $Direccion = $_POST['Direccion'],
      $Email = $_POST['Email'],
      $F_nacimiento = $_POST['F_nacimiento'],
      $Ciudad = $_POST['Ciudad'],
      $Sede = $_POST['Sede'],
      $Rol = $_POST['Rol']
    ];
    //Guardame los datos de mi formulario de registro que recibo por post
    $query = "INSERT INTO `sede_principal`.`p_administrativo`(
      Cedula,
    Nombre,
    Apellido,
    Telefono,
    Direccion,
    Email,
    F_nacimiento,
    Ciudad,
    Id_sede,
    R_Padministrativo) VALUES('$Cedula','$Nombre','$Apellido','$Telefono','$Direccion','$Email','$F_nacimiento','$Ciudad','$Sede','$Rol')";
    $resultado = $miconexion->query($query);
    if ($resultado) {
        //Si se crea un nuevo registro mandame al listado de registro
        header("location: ../index.php?page=administrativos");
    }
?>



 
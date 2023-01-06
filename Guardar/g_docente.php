
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
        $Nombre = $_POST['Nombres'],
        $Apellido = $_POST['Apellidos'],
        $Telefono = $_POST['Telefono'],
        $Direccion = $_POST['Direccion'],
        $Email = $_POST['Email'],
        $F_nacimiento = $_POST['F_nacimiento'],
        $Ciudad = $_POST['Ciudad'],
        $Programa = $_POST['Programa'],
        $Sede = $_POST['Sede'],
        $Contratacion = $_POST['Contratacion'],
      $Rol = $_POST['Rol']
    ];
    //Guardame los datos de mi formulario de registro que recibo por post
    $query = "INSERT INTO `sede_principal`.`docente`(Cedula,
    Nombres,
    Apellidos,
    Telefono,
    Direccion,
    F_nacimiento,
    Ciudad,
    Email,
    Id_Programa,
    Id_Sede,
    id_contratacion,
    rol_docente) VALUES('$Cedula','$Nombre','$Apellido','$Telefono','$Direccion','$F_nacimiento','$Ciudad','$Email','$Programa','$Sede','$Contratacion','$Rol')";
    $resultado = $miconexion->query($query);
    if ($resultado) {
        //Si se crea un nuevo registro mandame al listado de registro
        header("location: ../index.php?page=docentes");
    }
?>



 
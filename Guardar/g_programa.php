
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
      $Nombre_p = $_POST['Nombre_p'],
      $Num_semestre = $_POST['Num_semestre'],
      $Modalidad = $_POST['Modalidad'],
      $Facultad = $_POST['Facultad'],
      $Precio = $_POST['Precio']
    ];
    //Guardame los datos de mi formulario de registro que recibo por post
    $query = "INSERT INTO `sede_principal`.`programa` (Nombre_p, Num_semestre, Modalidad, Id_Faculta, Precio) VALUES('$Nombre_p' , '$Num_semestre' , '$Modalidad' , '$Facultad' , '$Precio')";
    $resultado = $miconexion->query($query);
    if ($resultado) {
        //Si se crea un nuevo registro mandame al listado de registro
        header("location: ../index.php?page=programas");
    }
?>



 
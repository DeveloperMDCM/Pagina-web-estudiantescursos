
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
      $facultad = $_POST['Facultad'],
    ];
    //Guardame los datos de mi formulario de registro que recibo por post
    $query = "INSERT INTO `sede_principal`.`facultad`(Nombre) VALUES('$facultad')";
    $resultado = $miconexion->query($query);
    if ($resultado) {
        //Si se crea un nuevo registro mandame al listado de registro
        header("location: ../index.php?page=facultades");
    }
?>



 
<!-- copyring moises-canaria
copyring moises-canaria
copyring moises-canaria
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
       
   <?php
        session_start();
        //inicia mi sesion
        if(isset($_SESSION["auth"])){
            include('header.php');
        } else {
            include('login/header_login.php');
        }
   ?>

   <?php

        if(isset($_GET['page'])){
            if($_GET['page'] == 'form' && isset($_SESSION["auth"])) {
                
                include('Registro/formulario.php');
            }
            if($_GET['page'] == 'r_estudiante' && isset($_SESSION["auth"])) {
                
                include('Registro/estudiante.php');
            }
            if($_GET['page'] == 'r_docentes' && isset($_SESSION["auth"])) {
                
                include('Registro/docente.php');
            }
            if($_GET['page'] == 'r_administrativo' && isset($_SESSION["auth"])) {
                
                include('Registro/administrativo.php');
            }
            if($_GET['page'] == 'r_facultad' && isset($_SESSION["auth"])) {
                
                include('Registro/facultad.php');
            }
            if($_GET['page'] == 'r_sede' && isset($_SESSION["auth"])) {
                
                include('Registro/sede.php');
            }
            if($_GET['page'] == 'r_programa' && isset($_SESSION["auth"])) {
                
                include('Registro/programa.php');
            }
            if($_GET['page'] == 'admins' && isset($_SESSION["auth"])) {
                include('Listado/listado_admin.php');
            }
            if($_GET['page'] == 'estudiantes' && isset($_SESSION["auth"])) {
                include('Listado/listado_estudiantes.php');
            }
            if($_GET['page'] == 'docentes' && isset($_SESSION["auth"])) {
                include('Listado/listado_docentes.php');
            }
           
            if($_GET['page'] == 'administrativos' && isset($_SESSION["auth"])) {
                include('Listado/listado_administrativos.php');
            }
            if($_GET['page'] == 'facultades' && isset($_SESSION["auth"])) {
                include('Listado/listado_facultades.php');
            }
            if($_GET['page'] == 'sedes' && isset($_SESSION["auth"])) {
                include('Listado/listado_sedes.php');
            }
            if($_GET['page'] == 'programas' && isset($_SESSION["auth"])) {
                include('Listado/listado_programas.php');
            }
            if($_GET['page'] == 'cursos' && isset($_SESSION["auth"])) {
                include('Listado/listado_cursos.php');
            }
            if($_GET['page'] == 'estudiantecurso' && isset($_SESSION["auth"])) {
                include('Listado/listado_estudiantes_cursos.php');
            }
           
            if($_GET['page'] == 'login' && isset($_SESSION["auth"])) {
                header("location: index.php?page=admins");
            }
           
            
            if($_GET['page'] == 'login') {
                include('login/login.php');
            }
           
        
        }
   ?>
   <div class="imagenindex   " style="margin: 120px 0 ;">
       <h1 class="text-center ">SEDE PRINCIPAL CECAR</h1>
  <img class="rounded mx-auto d-block " src="./img/admin.png" alt=""> 
  </div>
  
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

<!-- copyring moises-canaria
copyring moises-canaria
copyring moises-canaria
copyring pedro-barios
copyring pedro-barios
copyring pedro-barios

copyring moises-canaria -->
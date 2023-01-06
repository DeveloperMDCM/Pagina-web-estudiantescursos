<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Sistema</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!-- copyring moises-canaria
copyring moises-canaria
copyring moises-canaria
copyring moises-canaria -->

    <ul class="navbar-nav mr-auto  ">
    <div class="dropdown" >
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Registrar <span class="caret"></span>
        </button>
        <ul class=" dropdown-menu scrollable-menu bg-info" aria-labelledby="dropdownMenu1" style="text-align: center;" >
            <li ><a  style="text-decoration: none; color: #000" href="index.php?page=form">Administrador</a></li>
            <li><a style="text-decoration: none; color: #000;" href="index.php?page=r_estudiante">Estudiante</a></li>
            <li><a style="text-decoration: none; color: #000;" href="index.php?page=r_docentes">Docente</a></li>
            <li><a style="text-decoration: none; color: #000;" href="index.php?page=r_administrativo">Administrativo</a></li>
            <li><a style="text-decoration: none; color: #000;" href="index.php?page=r_facultad">Facultad</a></li>
            <li><a style="text-decoration: none; color: #000;" href="index.php?page=r_sede">Sede</a></li>
            <li><a style="text-decoration: none; color: #000;" href="index.php?page=r_programa">Programa</a></li>
        </ul>
    </div>
     
      <li class="nav-item ">
        <a class="nav-link " href="index.php?page=admins">Admins <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="index.php?page=estudiantes">Estudiantes <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="index.php?page=docentes">Docentes<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="index.php?page=administrativos">Administrativos<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php?page=facultades">Facultades<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="index.php?page=sedes">Sedes<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="index.php?page=programas">Programas<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="index.php?page=cursos">Cursos<span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item ">
        <a class="nav-link" href="index.php?page=estudiantecurso">Estudantes cursos<span class="sr-only">(current)</span></a>
      </li> -->
     
      
    </ul>
    <h4 style="padding: 0 15px ; font-size: 20px">

    <?php 
    //variable que guarda el nombre del login
      echo $_SESSION["auth"] ;
      
    ?>  
    </h4>
    <!-- cierrame la sesion  -->
    <a  class="btn w-20 btn-danger " href="login/logout.php">Salir</a>
  </div>
</nav>
<!-- copyring moises-canaria
copyring moises-canaria
copyring moises-canaria
copyring pedro-barios
copyring pedro-barios
copyring pedro-barios

copyring moises-canaria -->

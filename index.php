<?php
	include('php/cont.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página personal">
    <meta name="author" content="Esteban Gamboa García">

    <title>Esteban Gamboa García</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

  </head>
  <body id="page-top">

    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#">Esteban Gamboa García</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" onclick="loadHome()" href="#page-top">Inicio</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" onclick="loadAbout()" href="#page-top">Acerca de</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" onclick="loadServices()" href="#page-top">Conocimientos</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" onclick="loadPortafolio()" href="#page-top">Portafolio</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" onclick="loadContact()" href="#page-top">Contacto</a>
        </li>
      </ul>
    </nav>

    <div id="masterChange">
      <!-- Home -->
      <div class="masthead d-flex">
        <div class="container text-center my-auto">
          <h1 class="mb-1 text-white">Esteban Gamboa García</h1>
          <h3 class="mb-5 text-white">
            <em>Ingeniero en computación</em>
          </h3>
          <a class="btn btn-primary btn-xl js-scroll-trigger" onclick="loadAbout()" href="#page-top">Acerca de</a>
        </div>
        <div class="overlay"></div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://twitter.com/EstebanIC_/" target="_blank">
              <i class="icon-social-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.instagram.com/esteban.198/" target="_blank">
              <i class="icon-social-instagram"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.linkedin.com/in/esteban-gamboa-garc%C3%ADa-376495125/" target="_blank">
              <i class="icon-social-linkedin"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://github.com/EstebanGG/" target="_blank">
              <i class="icon-social-github"></i>
            </a>
          </li>
        </ul>
        <p class="text-muted mb-0">Copyright &copy; Esteban Gamboa García 2018</p>
        <p class="text-muted mb-0">Visitas <?php echo contador();?></p>
      </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
    <script src="js/index.js"></script>

  </body>

</html>

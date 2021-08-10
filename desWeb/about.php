<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <!-- Site Metas -->
      <title>Formulario | Juegos Olimpicos</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Site Icons -->
      <link rel="shortcut icon" href="#" type="image/x-icon" />
      <link rel="apple-touch-icon" href="#" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- Pogo Slider CSS -->
      <link rel="stylesheet" href="css/pogo-slider.min.css" />
      <!-- Site CSS -->
      <link rel="stylesheet" href="css/style.css" />
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- Custom CSS -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <script src="script.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

   </head>
   <body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
      <!-- LOADER -->
      <div id="preloader">
         <div class="loader">
            <img src="images/loader.gif" alt="#" />
         </div>
      </div>
      <!-- END LOADER -->
      <div class="wrapper">
      <nav id="sidebar">
         <div class="menu_section">
            <ul>
               <li><a href="index.php">Inicio</a></li>
               <li><a href="about.php">About</a></li>
               <li><a href="services.php">Formulario</a></li>
            </ul>
         </div>
      </nav>
      <div id="content">
         <!-- Start header -->
         <header class="top-header">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="logo_main">
                        <a href="index.php"><img src="images/logo.png" style="width: 100px;"></a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn"><img src="images/menu_icon.png"></button>
                  </div>
               </div>
            </div>
         </header>
         <!-- End header -->
         <!-- Inner page banner -->
         <div id="inner_page_banner" class="section" style="background-image:url(images/slide2.jpg);background-size: cover;background-position: center center;">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                      <div class="full">
                        <h3>Resultado</h3>
                      </div>
                  </div>
               </div>
            </div>
         </div>
         <?php $nombre = $_POST['nombre'];
            $apellido = $_POST['2'];
            $correo = $_POST['3'];
            $fon = $_POST['4'];
            $direc = $_POST['5'];
            $ciud = $_POST['6'];
            $pais = $_POST['7'];
            $com = $_POST['8'];
         ?>
         <!-- End inner page banner -->
         <!-- section -->
         <div class="section"><br><br>

            <?php if(isset($_POST['nombre'])){ ?>
             
                     <div class="alert alert-success" role="alert" id="success_message" style="text-align: center;">Enviado con exito <i class="glyphicon glyphicon-thumbs-up"></i> Gracias por brindarnos tu comentario, nos sera de mucha ayuda.</div><br><br>
                     <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">correo</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Pais</th>
                            <th scope="col">Comentario</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th><?php echo $nombre; ?></th>
                            <td><?php echo $apellido; ?></td>
                            <td><?php echo $correo; ?></td>
                            <td>@<?php echo $fon; ?></td>
                            <th><?php echo $direc; ?></th>
                            <td><?php echo $ciud; ?></td>
                            <td><?php echo $pais; ?></td>
                            <td>@<?php echo $com; ?></td>
                          </tr>
                          
                        </tbody>
                      </table><br><br><br>

                      <?php }else{ ?>

                        <div class="alert alert-danger" role="alert" id="error_message" style="text-align: center;">Error.</div><br><br>

                        <?php } ?>

         </div>
         <!-- end section -->
         <!-- Start Footer -->
         <footer class="footer-box">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 white_fonts">
                     <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                           <div class="full">
                              <img class="img-responsive" img src="images/logo.png" style="width: 100px;" />
                           </div>
                           <div class="full white_fonts">
                              <p>Toda información sobre los juegos olimpicos 2020</p>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                           <div class="full">
                              <div class="footer_blog full white_fonts">
                                 <h3>ADDRESS</h3>
                                 <p><Direccion Ciudad de Guatemala><br>Soporte: esolisx2@miumg.edu.gt</p>
                              </div>
                              <div class="full">
                                 <ul class="social_icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                           <div class="full">
                              <div class="footer_blog full white_fonts">
                                 <h3>Sobre los Juegos</h3>
                              </div>
                              <div class="full timetable_blog">
                                 <ul class="time_table text_align_left">
                                    <li>Visión</li>
                                    <li>Misión</li>
                                    <li>Emblemas</li>
                                    <li>Mascota</li>
                                    <li>Alimentación</li>
                                    <li>Accion y legado</li>
                                 </ul>
                                 <ul class="time_table text_align_right">
                                    <li>Estructura</li>
                                    <li>Marqueting</li>
                                    <li>Poster</li>
                                    <li>Transporte</li>
                                    <li>Condiciones</li>
                                    <li>Nomina</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- End Footer -->

      </div>
      <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/jquery.pogo-slider.min.js"></script>
      <script src="js/slider-index.js"></script>
      <script src="js/smoothscroll.js"></script>
      <script src="js/form-validator.min.js"></script>
      <script src="js/contact-form-script.js"></script>
      <script src="js/isotope.min.js"></script>
      <script src="js/images-loded.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- End Google Map -->
      <script>
         $(document).ready(function() {
           $('#sidebarCollapse').on('click', function() {
             $('#sidebar, #content').toggleClass('active');
             $('.collapse.in').toggleClass('in');
             $('a[aria-expanded=true]').attr('aria-expanded', 'false');
           });
         });
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>

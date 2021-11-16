<?php 
session_start();
include './php/conexion.php';

$conexion->query("insert into categorias (nombre,apellido,email,celular,mensaje)  
  values( 
    '".$_POST['con_fname']."',
    '".$_POST['con_lname']."',
    '".$_POST['con_email']."',
    '".$_POST['con_cel']."',
    '".$_POST['con_message']."'

        )   
")or die($conexion->error);
// $id_usuario = $conexion->insert_id;

// $fecha = date('Y-m-d h:m:s');
// $conexion -> query("insert into ventas(id_usuario,total,fecha) values($id_usuario,$total,'$fecha')")or die($conexion->error);

unset($_SESSION['carrito']);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Tienda BICIMEX-GRACIAS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="shortcut icon" href="assets/images/bicimex.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
   <?php include("./layouts/header.php"); ?> 

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Muchas Gracias por Contactarnos!  BICIMEX</h2>
            
            
          </div>
        </div>
      </div>
    </div>

    <?php include("./layouts/footer.php"); ?> 

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BICIMEX-Contáctanos</title>
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

    <div class="site-section"  style="background-color:#a0ebef">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Escribe aquí</h2>
          </div>
          <div class="col-md-7">

            <form action="./thankyou1.php" method="post">
              
              <div class="p-3 p-lg-5 border"  style="background-color: #F75B6D">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="con_fname" name="con_fname" required>
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Apellidos <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="con_lname" name="con_lname" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="con_email" name="con_email"  required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Celular<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="con_cel" name="con_cel" required>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Mensaje </label>
                    <textarea name="con_message" id="con_message" cols="30" rows="7" class="form-control"required></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enviar">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5 ml-auto" >
            <div class="p-4 border mb-3"  style="background-color: #F75B6D">
              <span class="d-block  " style="color:white">Junín</span>
              <li class="address" style="color:White">Av.Jose Galvez N°853 -Tarma, Perú.</li>
            </div>
            
           

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
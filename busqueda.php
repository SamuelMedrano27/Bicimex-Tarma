<?php 
    include('./php/conexion.php');
    if(!isset($_GET['texto'])){
        header("Location: ./index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TIENDA-BICIMEX</title>
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
  <body style="background-color:#7FDDF4">
  
  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?> 

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Buscando resultados para <?php echo $_GET['texto'];?> </h2></div>
               
              </div>
            </div>
            <div class="row mb-5">
              <?php 
               
                $resultado = $conexion ->query("select * from productos where 
                    nombre like '%".$_GET['texto']."%' or 
                    descripcion like '%".$_GET['texto']."%' 

                    order by id DESC limit 10")or die($conexion -> error);
                    if(mysqli_num_rows($resultado) > 0){ 

                   
                while($fila = mysqli_fetch_array($resultado)){
              ?>
                  <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                    <div class="block-4 text-center border">
                      <figure class="block-4-image">
                        <a href="shop-single.php?id=<?php echo $fila['id'];?>">
                        <img src="images/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>" class="img-fluid"></a>
                      </figure>
                      <div class="block-4-text p-4">
                        <h3><a href="shop-single.php?id=<?php echo $fila['id'];?>"><?php echo $fila['nombre'];?></a></h3>
                        <p class="mb-0"><?php echo $fila['descripcion'];?></p>
                        <p class="text-primary font-weight-bold">S/<?php echo $fila['precio'];?></p>
                      </div>
                     
                    </div>
                  </div>
                <?php } }else{
                    echo  '<h2>Sin resultados</h2>';
                } ?>


            </div>
           
          </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4" style="background-color:white">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
               <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="#" class="d-flex"><span>Bicicletas</span> <span class="text-black ml-auto">(5)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>LLantas</span> <span class="text-black ml-auto">(3)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>C??maras</span> <span class="text-black ml-auto">(2)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Timones</span> <span class="text-black ml-auto">(3)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Asientos</span> <span class="text-black ml-auto">(2)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Aros</span> <span class="text-black ml-auto">(3)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>P????ones</span> <span class="text-black ml-auto">(3)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Catalinas</span> <span class="text-black ml-auto">(2)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Cadenas</span> <span class="text-black ml-auto">(3)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Frenos</span> <span class="text-black ml-auto">(3)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Cambios</span> <span class="text-black ml-auto">(3)</span></a></li>
              </ul>
            </div>

            <div class="border p-4 rounded mb-4" style="background-color:white">
              <div class="mb-4" >
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filtrar por precio</h3>
                <div id="slider-range" class="border-primary" ></div>
                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
              </div>

              

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Red (2,429)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Green (2,298)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Blue (1,075)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Purple (1,075)</span>
                </a>
              </div>

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
<?php 
session_start();
if(!isset($_SESSION['carrito'])){
  header('Location: ./index.php');
}
$arreglo  = $_SESSION['carrito'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda BICIMEX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="assets/images/bicimex.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body   style="background-color:#a0ebef" >
     <script src="https://www.paypal.com/sdk/js?client-id=Adz7bYAafY7vx-uib68LQiHI8_2_2F_m97xxJx7zwbbsSxvX_CawrgccTABirlyvvha51IX1aj96FKl8"> // Replace YOUR_SB_CLIENT_ID with your sandbox client ID
    </script>
  
  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?> 
    <form action="./thankyou.php" method="post">
      <div class="site-section">
        <div class="container">
        
          <div class="row">
          
            <div class="col-md-6 mb-5 mb-md-0" >
              <h2 class="h3 mb-3 text-black">Detalles para el envio</h2>
              <div class="p-3 p-lg-5 border" style="background-color: #F75B6D">
                <div class="form-group">
                  <label for="c_country" class="text-black">Región <span class="text-danger">*</span></label>
                  <select id="c_country" class="form-control" name="country">
                    <option value="1">Seleciona tu región</option>    
                    <option value="2">Junin</option>    
                    <option value="3">Ancash</option>    
                    <option value="4">Arequipa</option>    
                    <option value="5">Ayacucho</option>    
                    <option value="6">Cajamarca</option>    
                    <option value="7">Cuzco</option>    
                    <option value="8">Huancavelica</option>    
                    <option value="9">Huanuco</option> 
                    <option value="9">Ica</option>   
                    <option value="9">Lima</option>
                    <option value="9">Loreto</option>
                    <option value="9">Piura</option>
                    <option value="9">Ucayali</option>
                  </select>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname"placeholder="Samuel"  required>
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Apellido <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname" placeholder="Medrano" required>
                  </div>
                </div>

              

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_address" class="text-black">Dirección <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Av.Jose Galvez N°820" required>
                  </div>
                </div>
                 <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_companyname" class="text-black">Ciudad </label>
                    <input type="text" class="form-control" id="c_ciudad" name="c_ciudad" required> 
                  </div>
                </div>


                

                <div class="form-group row mb-5">
                  <div class="col-md-6">
                    <label for="c_email_address" class="text-black">Email  <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_email_address" name="c_email_address" placeholder="bicimex20@gmail.com" required>
                  </div>
                  <div class="col-md-6">
                    <label for="c_phone" class="text-black">Celular<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="983328458" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> Create una cuenta?</label>
                  <div class="collapse" id="create_an_account">
                    <div class="py-2">
                      <p class="mb-3" style="color:white" >Crea una cuenta ingresando la siguiente información. Si es un cliente recurrente, inicie sesión en la parte superior de la página.</p>
                      <div class="form-group">
                        <label for="c_account_password" class="text-black">Contraseña de la cuenta</label>
                        <input type="password" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
                      </div>
                    </div>
                  </div>
                </div>


              

                <div class="form-group">
                  <label for="c_order_notes" class="text-black">Algún Comentario</label>
                  <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Escribe aquí....."></textarea>
                </div>

              </div>
            </div>
            <div class="col-md-6">

            
              
              <div class="row mb-5">
                <div class="col-md-12" >
                  <h2 class="h3 mb-3 text-black" >Tu pedido</h2>
                  <div class="p-3 p-lg-5 border" style="background-color: #F75B6D ">
                    <table class="table site-block-order-table mb-5">
                      <thead>
                        <th  style="color:white">Producto</th>
                        <th style="color:white">Total</th>
                      </thead>
                      <tbody>
                      <?php
                        $total = 0; 
                        for($i=0;$i<count($arreglo);$i++){
                          $total =$total+ ($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad']);
                        
                      ?>
                        <tr>
                          <td style="color:white">*<?php echo $arreglo[$i]['Nombre'];?> </td>
                          <td style="color:white">S/<?php echo  number_format($arreglo[$i]['Precio'], 2, '.', '');?></td>
                        </tr>
                    
                        <?php 
                          }
                        ?>
                        <tr>
                          <td style="color:white">Orden Total</td>
                          <td style="color:white">S/<?php echo number_format($total, 2, '.', '');?></td>
                        </tr>
                      </tbody>
                    </table>

                    <div class="border p-3 mb-5" style="background-color:white">
                      <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>
                      <div class="collapse" id="collapsepaypal">
                        <div class="py-2">
                          <p class="mb-0">Realice su pago directamente en nuestra cuenta bancaria. Utilice su ID de pedido como referencia de pago.</p>
                        </div>
                        <div id="paypal-button-container"></div>
                      </div>
                    </div>
                    <div class="border p-3 mb-5" style="background-color:white ">
                      <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" style="color:black">No te preocupes, pagalo ahora atravéz de Paypal  o cuando el pedido llegue a tu casa de manera presencial</a></h3>

                    </div>


                    <div class="form-group">
                      <button class="btn btn-primary btn-lg py-3 btn-block" type="submit">Pidelo ya!</button>
                    </div>


                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- </form> -->
        </div>
      </div>
    </form>           
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
  <script>
      paypal.Buttons({
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '<?php echo number_format($total*0.27, 2, '.', '');?>'
              }
            }]
          });
        },
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            console.log(details);
            alert('Transaction completed by ' + details.payer.name.given_name);
          });
        }
      }).render('#paypal-button-container'); // Display payment options on your web page
    </script>
    
  </body>
</html>
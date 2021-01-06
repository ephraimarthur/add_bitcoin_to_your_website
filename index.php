<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link type="text/css"  rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
  </head>
  <body>
  

      <div class="container">
          
          <div class="products_container">
                
                <div align="center">
                    
                    <img class="img-thumbnail" src="img/donuts.jpg" alt="donuts.jpg">

                      <h1 class="product_name">Donuts</h1>

                         <p class="price"> <span class="dollar_sign">$</span> 20.00</p> 

                         <ul class="list-group">
                        <li style="font-size:100%;color:#000" class="list-group-item disabled" aria-disabled="true">

                          <strong>Ingredients:</strong> 4 cups flour, 1/2 tsp salit,
                          1 packed dry yeast,, 2/3 cup milk  

                        </li>

                      </ul> 


                      <!--Display buy bottom-->
                      <form action="https://www.coinpayments.net/index.php" method="POST">
                            
                        <input type="hidden" name="cmd" value="_pay_simple">  
                        
                        <input type="hidden" name="reset" value="1">   

                        <input type="hidden" name="merchant" value="your_coin_payments_merchant_id"> 

                        <input type="hidden" name="currency" value="USD"> 

                        <input type="hidden" name="amountf" value="20"> 

                        <input type="hidden" name="item_name" value="Donuts"> 


                          <!--Set callbaks url-->
                          <input type="hidden" name="success_url" value="localhost/bitcoinpayments/success.php"> 
                         
                         <input type="hidden" name="cancel_url" value="localhost/bitcoinpayments/cancel.php"> 


                         <br>

                          <input type="submit"  class="btn btn-block btn-md btn-primary" value="Pay with Bitcoin">

                      </form>


                </div>

          </div>

      </div>  











    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  
    -->
  </body>
</html>
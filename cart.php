<?php
include "connection.php" 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://kit.fontawesome.com/e9df725216.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Kalye Life In New Times</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
        

        <link rel="stylesheet" href="design.css">
        <script src="cart.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#">
            <img alt="logo" src="klint.png" height="85px" width="90px" id="logoid">
        </a>
        <label class="navbar-brand-a" href="#" id="logotitle">Klynt</label>

        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon">.</span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="LandPage.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="products.html">Collections</a></li>
                <li class="nav-item"><a class="nav-link active" href="#" id="cart-link"><i class=""></i> Cart</a></li>
                <li class="nav-item"><a class="nav-link" href="brand.html">Brand</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="Profile.html">
                    <div class="circle-nav"><img alt="Profile" src="Mikhail.png" class="profile-image-nav"></div>
                </a></li>
                <li class="nav-item">
                    <form class="form-inline">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
    <h1 class="text-center">Your Shopping Cart</h1>
    <div class="cart-box border p-4 rounded shadow">
        <div class="cart-container">
            <div class="row font-weight-bold border-bottom pb-2 mb-3">
                <div class="col-md-6">Item</div> 
                <div class="col-md-2">Price</div>
            </div>
            <?php
            $res = mysqli_query($link, "SELECT * FROM products");
            $subtotal = 0; 

            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    echo '<div class="row border-bottom pb-2 mb-3">';
                    echo '<div class="col-md-6">' . htmlspecialchars($row['productName']) . '</div>'; 
                    echo '<div class="col-md-2">P' . number_format($row['productPrice'], 2) . '</div>'; 
                    
                    $subtotal += $row['productPrice'];
                    
                    echo '</div>';
                }
            } else {
                echo '<div class="row"><div class="col-md-12 text-center">Your cart is empty.</div></div>';
            }
            ?>
            <div class="row mt-4">
                <div class="col-md-8 font-weight-bold">Subtotal:</div>
                <div class="col-md-4" id="subtotal">P<?php echo number_format($subtotal, 2); ?></div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkoutmodal">
  Checkout
</button>
<div class="modal fade" id="checkoutmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Payment Method:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <div class="pay_method">
        <button type="button" data-dismiss="modal" class="btn btn-primary" data-toggle="modal" data-target="#gcashmodal">
<img src="gcash.png" alt="" width="30%">
<h5>GCash</h5>
</button>
<br>
<br>
<button onclick="order()" type="button" class="btn btn-primary" data-toggle="modal">
<img src="cod.png" alt="" width="30%">
<h5>COD | Use Address</h5>
</button>        
</div>
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="gcashmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GCash Payment:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <p>Enter GCash Number: </p>
        <input type="text" name="" id="">
      </div>
      
      <div class="modal-footer">
        <button onclick="order()" type="button" id="orderbtn" class="btn btn-secondary" data-dismiss="modal">Order</button>
        <script>
            function order() {
            alert( "Order Success!" );
            window.location.href = "products.html";
        }
        </script>
      </div>
    </div>
  </div>
</div>


                </div>
            </div>
        </div>
    </div>  
</div>
    
    <footer class="page-footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                <h4 class="text-uppercase font-weight-bold">Additional Information</h4><br>
                <p>Founded by Mendoza Mikhail Pitstock in 2023, The Project transcends mere clothing; it embodies a cultural experience. Streetwear, a fashion trend originated in streets, is known for its laid-back, comfortable, 
                  and distinctive aesthetic that gives consideration to the attitudes and lifestyle (Blogs Crew, 2023)</p>
                <p>People express themselves in different, unique ways which includes their clothing, hairstyle, body customization (e.g., tattoos), and jewelry , and adopting what is more commonly referred to as fashion (Ross, 2020), 
                  and the fashion embodies a contemporary perspective and a set of trends to embrace. Notably , a compelling observation is that, for a significant portion of participants, fashion is predominantly associated with younger generations (Shukurova, 2018).</p>
            </div>
            
            
            <div class="col-lg-4 col-md-4 col-sm-12" id="contact-details">
                <h4 class="text-uppercase font-weight-bold">Contact Us!</h4><br>
                <div class="details">
                  <div>
                      <li><i class="fa-solid fa-map"></i>
                          <p>#938 Aurora Boulevard. Cubao, Quezon City</p>
                      </li>
                      
                          <li>
                            <i class="fa-solid fa-envelope"></i>
                            <i> <a href="mailto:info@klynewtimes.com">info@klynewtimes.com</a></i>
                        </li>
                      </li>
                      <li>
                        <i class="fa-brands fa-instagram"></i>
                        <a href="https://www.instagram.com/klynewtimes" target="_blank" rel="noopener noreferrer">@klynewtimes</a>
                    </li>
                      <li>
                          <i class="fa-solid fa-phone"></i>
                          <p>09602010983 / 09785678293</p>
                      </li>
                  </div>
              </div>
            </div>
      
        </div>
        <div class="footer-copyright text-center">© 2024 KLYNT All rights reserved.</div>
        </div>
      </footer>
</body>
</html>

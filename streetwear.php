<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="design.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Streetwear</title>
  <link rel="stylesheet" href="product.css">
  <link rel="stylesheet" href="streetwear.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
  crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/e9df725216.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
</head>

  <nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="#">
      <img alt="logo" src="klint.png" height="85px" width="90px" id="logoid">
    </a>
    <label class="navbar-brand-a" href="#" id="logotitle">Klynt.</label>
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
      <span class="navbar-toggler-icon">.</span>
    </button>
    <div class="collapse navbar-collapse" id="main-navigation">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="LandPage.html">Home</a></li>
        <li class="nav-item"><a class="nav-link active" href="products.html">Collections</a></li>
        <li class="nav-item"><a class="nav-link" href="cart.php" id="cart-link">Cart <span class="badge badge-danger" id="cart-count">2</span></a></li>
        <li class="nav-item"><a class="nav-link" href="brand.html">Brand</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="Profile.html">
            <div class="circle-nav"><img alt="Profile" src="Mikhail.png" class="profile-image-nav"></div></a></li>
        <li class="nav-item"><form class="form-inline"><button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button></form></li>
      </ul>
    </div>
  </nav>

  <div id="container">
    <h2>Streetwear</h2>
    <br />
    <a id="buttonclick" href="products.html" class="btn btn-primary">Collection</a>
    <div class="container text-center" id="list">
      <div class="row">
        <div class="col">
          <img src="products/product1.png" />
          <p>Blond&Blond</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">View</button>
          
          <!-- Modal for Footwear1 -->
          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Blond&Blond</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="products/product1.png" alt="Tim Leather Shoes">
                  <hr />
                  <h6><span id="bold">Description:</span></h6>
                  <p>Elevate your street style with the Blond&Blond tee, a bold statement piece that plays with contrast and color. Featuring oversized graphics that blend modern art with nostalgic references, this shirt stands out in any urban environment. Tailored for comfort, its soft cotton fabric ensures that you stay both cool and stylish from day to night.</p>
                  <p><span class="bold">Size: </span>10 US</p>
                  <p id="product1_price"><span class="bold">Price: </span>P3,700</p>

                  <label for="coupon-code">Enter Coupon Code:</label>
                  <input type="text" id="coupon-code" class="form-control" placeholder="Enter coupon">
                <a/div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="apply-coupon" data-product="1">Apply Coupon</button>
                  <form method="post" action="">
    <button name="buyproduct1" type="submit" class="btn btn-primary">Add to Cart</button>
</form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <img src="products/product2.png" />
          <p>Kanye Tee</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">View</button>
          
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Kanye Tee</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="products/product2.png" alt="Tim Leather Shoes">
                  <hr />
                  <h6><span id="bold">Description:</span></h6>
                  <p>Step into the legacy with the Kanye Tee, inspired by the iconic artistry and cultural impact of one of music’s most influential figures. This tee showcases striking typography and minimalist design, embodying the essence of hip-hop and street fashion. Perfect for layering or standing out on its own, this shirt is a must-have for any fan of groundbreaking creativity.</p>
                  <p><span class="bold">Size: </span>10 US</p>
                  <p id="product1_price"><span class="bold">Price: </span>P3,200</p>

                  <label for="coupon-code">Enter Coupon Code:</label>
                  <input type="text" id="coupon-code" class="form-control" placeholder="Enter coupon">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="apply-coupon" data-product="1">Apply Coupon</button>
                  <form method="post" action="">
    <button name="buyproduct2" type="submit" class="btn btn-primary">Add to Cart</button>
</form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <img src="products/product3.png" />
          <p>Nirvana "Bleach" Regular</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">View</button>
          
          <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Nirvana "Bleach" Regular</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="products/product3.png" alt="Tim Leather Shoes">
                  <hr />
                  <h6><span id="bold">Description:</span></h6>
                  <p>Unleash your inner rockstar with the Nirvan "Bleach" Regular tee, a tribute to the grunge era that transcended generations. Made from premium cotton, this shirt features the iconic album cover art that sparked a cultural revolution. It’s the perfect blend of comfort and rebellion, making it an essential addition to any music lover’s wardrobe.</p>
                  <p><span class="bold">Size: </span>10 US</p>
                  <p id="product1_price"><span class="bold">Price: </span>P4,000</p>

                  <label for="coupon-code">Enter Coupon Code:</label>
                  <input type="text" id="coupon-code" class="form-control" placeholder="Enter coupon">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="apply-coupon" data-product="1">Apply Coupon</button>
                  <form method="post" action="">
    <button name="buyproduct3" type="submit" class="btn btn-primary">Add to Cart</button>
</form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <img src="products/product4.png" />
          <p>Japanese City Pop Tee</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">View</button>
          
          <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Japanese City Pop Tee</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="products/product4.png" alt="Tim Leather Shoes">
                  <hr />
                  <h6><span id="bold">Description:</span></h6>
                  <p>Celebrate the retro vibes of the ‘80s with the Japanese City Pop Tee, a delightful homage to a musical genre that captures urban nostalgia. Featuring vibrant colors and whimsical graphics reminiscent of Tokyo's nightlife, this shirt is perfect for anyone eager to bring a touch of vintage flair to their streetwear. It’s a conversation starter that brings the best of past and present together.</p>
                  <p><span class="bold">Size: </span>10 US</p>
                  <p id="product1_price"><span class="bold">Price: </span>P2,600</p>

                  <label for="coupon-code">Enter Coupon Code:</label>
                  <input type="text" id="coupon-code" class="form-control" placeholder="Enter coupon">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="apply-coupon" data-product="1">Apply Coupon</button>
                  <form method="post" action="">
    <button name="buyproduct4" type="submit" class="btn btn-primary">Add to Cart</button>
</form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <img src="products/product5.png" />
          <p>Kaisen Tee</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5">View</button>
          
          <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Kaisen Tee</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="products/product5.png" alt="Tim Leather Shoes">
                  <hr />
                  <h6><span id="bold">Description:</span></h6>
                  <p>Dive into the world of contemporary anime culture with the KaisenTee, a dynamic piece that celebrates creativity and storytelling. Printed with vibrant graphics inspired by popular series, this shirt reflects the spirit of adventure and imagination. Made for both comfort and style, the KaisenTee is perfect for fans and fashion enthusiasts alike, adding a splash of color to any outfit.</p>
                  <p><span class="bold">Size: </span>10 US</p>
                  <p id="product1_price"><span class="bold">Price: </span>P3,900</p>

                  <label for="coupon-code">Enter Coupon Code:</label>
                  <input type="text" id="coupon-code-1" class="form-control" placeholder="Enter coupon">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="apply-coupon" data-product="1">Apply Coupon</button>
                  <form method="post" action="">
    <button name="buyproduct5" type="submit" class="btn btn-primary">Add to Cart</button>
</form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>

 

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script>
    document.getElementById('apply-coupon').addEventListener('click', function() {
      let couponCode = document.getElementById('coupon-code').value.trim();
      let productId = this.getAttribute('data-product');
      let priceElement = document.getElementById('product1_price');
      let originalPrice = parseFloat(priceElement.innerText.replace('P', '').replace(',', ''));

      if (couponCode) {
        fetch('apply_coupon.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body: `coupon_code=${couponCode}&product_id=${productId}`
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            let discount = data.discount;
            let newPrice = originalPrice - discount;
            priceElement.innerText = `P${newPrice.toFixed(2)}`;
            alert('Coupon applied successfully!');
          } else {
            alert(data.message);
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('An error occurred while applying the coupon.');
        });
      } else {
        alert('Please enter a coupon code!');
      }
    });
  </script>

<footer class="page-footer">

      <div class="container">
    
    <center><div class="input-container">
      <i class="fa fa-envelope-o"></i>
      <input 
        type="text" 
        id="emailus" 
        name="fname" 
        placeholder="email@website.com">
      <i class="fa fa-chevron-right"></i>
    </div></center>
   
        <center><p id="tptitle"> Klynt</p> </center>
       
        <link 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" 
          rel="stylesheet">
        <br>
    
          <div class="row">   
              <div class="col-lg-8 col-md-8 col-sm-12">
              <h4 class="text-uppercase font-weight-bold">Additional Information</h4><br>
              <p>Founded by Mendoza Mikhail Pitstock in 2023, Klynt transcends mere clothing; it embodies a cultural experience. Streetwear, a fashion trend originated in streets, is known for its laid-back, comfortable, 
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
      <div class="footer-copyright text-center">© 2024 The Project Co. All rights reserved.</div>
      </div>
    </footer>

</body>
</html>
<?php
if(isset($_POST["buyproduct1"]))
{
    mysqli_query($link, "insert into products values('Blond&Blond', 3700)");
}

if(isset($_POST["buyproduct2"]))
{
    mysqli_query($link, "insert into products values('Kanye Tee', 4000)");
}

if(isset($_POST["buyproduct3"]))
{
    mysqli_query($link, "insert into products values('Nirvana Bleach Regular', 2600)");
}

if(isset($_POST["buyproduct4"]))
{
    mysqli_query($link, "insert into products values('Japanese City Pop Vintage', 2600)");
}

if(isset($_POST["buyproduct5"]))
{
    mysqli_query($link, "insert into products values('Kaisen Tee', 3900)");
}
?>

<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="design.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Footwear</title>
  <link rel="stylesheet" href="product.css">
  <link rel="stylesheet" href="streetwear.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
  crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/e9df725216.js" crossorigin="anonymous">
   
  </script>  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
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
    <h2>Footwear</h2>
    <br />
    <a id="buttonclick" href="products.html" class="btn btn-primary">Collection</a>
    <div class="container text-center" id="list">
      <div class="row">
        <div class="col">
          <img src="products/footwear1.png" />
          <p>Urban Stride</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">View</button>
   
          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Urban Stride</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="products/footwear1.png" alt="Tim Leather Shoes">
                  <hr />
                  <h6><span id="bold">Description:</span></h6>
                  <p>Step into the rhythm of the city with Urban Stride, your ultimate companion for traversing urban landscapes. Crafted with a lightweight, breathable mesh upper, these sneakers offer unparalleled comfort and support, while the innovative outsole provides exceptional traction on varied surfaces. Whether you're exploring downtown or hitting the local park, the sleek design and eye-catching colorways ensure you’ll turn heads. Embrace the energy of your surroundings and stride confidently with this modern masterpiece.</p>
                  <p><span class="bold">Size: </span>10 US</p>
                  <p id="product1_price"><span class="bold">Price: </span>P2,500</p>

                  <label for="coupon-code">Enter Coupon Code:</label>
                  <input type="text" id="coupon-code" class="form-control" placeholder="Enter coupon">
                </div>
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
          <img src="products/footwear2.png" />
          <p>Retro Runner</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">View</button>
          
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Retro Runner</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="products/footwear2.png" alt="Tim Leather Shoes">
                  <hr />
                  <h6><span id="bold">Description:</span></h6>
                  <p>Channel the spirit of nostalgia with Retro Runner, where classic style meets modern functionality. Featuring a vibrant combination of suede and nylon, these shoes are a tribute to the iconic runners of the past. The cushioned midsole ensures all-day comfort, while the vintage-inspired design adds a stylish flair to any outfit. From morning jogs to casual outings, Retro Runner is the perfect blend of past and present, inviting you to reminisce while you race towards new adventures.</p>
                  <p><span class="bold">Size: </span>10 US</p>
                  <p id="product1_price"><span class="bold">Price: </span>P3,000</p>

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
          <img src="products/footwear4.png" />
          <p>Luxe Leather Lace-Up</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">View</button>
          
          <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Luxe Leather Lace-Up</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="products/footwear4.png" alt="Tim Leather Shoes">
                  <hr />
                  <h6><span id="bold">Description:</span></h6>
                  <p>Elevate your everyday look with the Luxe Leather Lace-Up shoes, where sophistication meets versatility. Crafted from premium full-grain leather, these lace-ups boast a rich texture and a polished finish that exudes timeless elegance. The cushioned insole ensures lasting comfort, making them an ideal choice for both formal occasions and casual outings. Pair them with tailored trousers or your favorite jeans, and let the Luxe Leather Lace-Up make a statement wherever you go.</p>
                  <p><span class="bold">Size: </span>10 US</p>
                  <p id="product1_price"><span class="bold">Price: </span>P2,700</p>

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
      let priceElement = document.getElementById('price');
      let originalPrice = parseFloat(priceElement.innerText.replace('P', '').replace(',', ''));

      if (couponCode) {
        fetch('check_coupon.php', {
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

<footer class="page-footer" >
  <div class="container" style="background-color: rgb(34, 34, 34)">

<center><div class="input-container">
  <i class="fa fa-envelope-o"></i>
  <input 
    type="text" 
    id="emailus" 
    name="fname" 
    placeholder="email@website.com">
  <i class="fa fa-chevron-right"></i>
</div></center>

    <center><p id="tptitle">Klynt </p> </center>
   
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
mysqli_query($link, "insert into products values('Urban Stride', 2500)");
}
if(isset($_POST["buyproduct2"]))
{
mysqli_query($link, "insert into products values('Retro Runner', 3000)");
}
if(isset($_POST["buyproduct3"]))
{
mysqli_query($link, "insert into products values('Luxe Leather Lace-Up', 2700)");
}
?>
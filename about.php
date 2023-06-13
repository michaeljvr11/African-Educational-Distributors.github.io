<?php
session_start();
include ("connections.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
  $email = $_POST['email'];

$query = "insert into customer (customerEmail) values ('$email')";

 mysqli_query($con, $query);
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>African Educational Distributors</title>
    <script src="https://kit.fontawesome.com/dc5bfa2030.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">


  </head>
  <body>
    <main>

      <!--I have made sure this page loads faster by Optimizing Image Size and Format, Avoiding Inline JS or CSS files, and Avoiding Redirects-->

      <!----header-->
        <section id ="header">
          <a href = "index.php"><img src = "img/AEDlogo.png" alt = "" class = "logo"></a>
      
                    <div>
                      <ul id="navbar">
                        <li>
                          <a href="index.php" class = "active" >Home</a>
                        </li>
                        <li >
                          <a href="catalogue.php">Catalogues</a>
                        </li>
                        <li >
                          <a href="accreditations.php">Accreditation</a>
                        </li>
                        <li>
                          <a href="about.php">About Us</a>
                        </li>
                        <li>
                          <a><i class="fa-solid fa-cart-shopping"></i></a>
                        </li>
                      </ul>
                 </div>  
                 
                </section>
                  
                <section id = "body">
                    <h1>
                        About Us:
                    </h1>
                    <p>
                        African Educational Distributors is a company started in 2003 by Jorge Martins,
                        with the vision to make high quality, multi-media educational resources
                        available to universities across Southern Africa.
                        AED supplies material actively to universities in South Africa, Namibia, Botswana, and Zimbabwe.
                        Based in Johannesburg, South Africa we supply the best in audiovisual material
                        to aid in giving your students the education that they deserve. 
                        We have an extensive catalogue of DVD's that can be used in the lecture room.
                        Our content is then available for download from the dvd, to store on your server.
                        Bring us a specialised need, and we will source and import, if not available 
                        locally, and deliver to your door. We source from all over the world. We are passionate about
                        providing the best in education for universities in Southern Africa, as well as 
                        making the classroom a fun & vibrant experience for all involved, through the use of the incredible
                        audiovisual materials we have available.
                    </p>

                    <h2>
                      Shipping information:
                    </h2>
                    <p>
                      We are able to ship our products staright to your door. We make use of national and international courier service.
                      This service is calculated by weight and is added to the total price when you make an order. For orders of a certain price,
                      we will not charge for the shipping service.
                    </p>

                    <h3>
                      Contact Us:
                    </h3>
                    <p>
                      Tel: 074 388 8777
                      <br>
                      E-mail: martinsjmc@icloud.com
                    </p>

                    <div class="container2">
                        <div class="column2">
                            <img src="img/uni-stock1.jpg" alt="Image 1">
                        </div>
                        <div class="column2">
                            <img src="img/uni-stock2.jpg" alt="Image 2">
                        </div>
                        <div class="column2">
                            <img src="img/uni-stock3.jpg" alt="Image 3">
                        </div>
                    </div>


                </section>
                

            
          
          

                    <!--footer-->

                    <section id = footer>
                      <div class = "col-1">
                        <h1>Useful Links</h1>
                        <a href = "index.php" >Home</a>
                        <a href = "catalogue.php" >Catalogues</a>
                        <a href = "accreditations.php" >Accreditions</a>
                        
                      </div>
                      <div class = "col-2">
                        <h1>Newsletter</h1>
                        <form method = "post">
                          <input type = "e-mail" name = "email" placeholder = "Your E-mail Address" required>
                          <br>
                          <button type = "submit">Subscribe Now</button>
                        </form>
                      </div>
                      <div class = "col-3">
                        <h1>We deliver straight to your door!</h1>
                      
                          
                          <button>Find out more</button>
                      
                        
                      </div>
                      <div class = "col-4">
                        <h1>
                          Contact
                        </h1>
                        <p>
                          31 Suffolk Road <br> 
                          Kensington 2094<br>
                          Johannesburg <br>
                          South Africa <br>
                          Tel: 074 388 8777 <br>
                          E-mail: martinsjmc@icloud.com
                        </p>
                        <div class="social-icons">
                          <i class="fa-brands fa-facebook"></i>
                          <i class="fa-brands fa-twitter"></i>
                          <i class="fa-brands fa-instagram"></i>
                        </div>
                      </div>
                  </section>

                </body>
                </html>
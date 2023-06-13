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

                <section id = "accbody">

                  <h1>
                    Our Accreditation Documents:
                  
                  </h1>
                  <h2>
                    African Educational Distributors is fully accredited and licensed to distribute educational content to universities.
                  </h2>
                  <h3>
                    Find all required documents by clicking the links below
                  </h3>

                  <div class="container1">
                    <!-- Content goes here -->
                
<br>
                     <a href="AED ENTITY DOCS\AED -  COMPANY PROFILE.pdf" id ="pdf">AED - Company Profile</a>

                     <br>
                     <br>

                     <a href="AED ENTITY DOCS\AED -  COMPANY REFERENCES.pdf" id ="pdf">AED - Company References</a>
                     <br>
                     <br>
                     <a href="AED ENTITY DOCS\AED - B-BBEE EXEMPTION.pdf" id ="pdf">AED - B-BEE Exemption</a>
                     <br>
                     <br>
                     <a href="AED ENTITY DOCS\AED - BBEE EXEMPTION AFFFIDAVIT.PDF" id ="pdf">AED - B-BEE Exemption Affidavit</a>
                     <br>
                     <br>
                     <a href="AED ENTITY DOCS\AED - COMPANY REGISTRATION DOCUMENT.pdf" id ="pdf">AED - Company Registration Document</a>
                     <br>
                     <br>
                     <a href="AED ENTITY DOCS\AED - CSD REPORT.pdf" id ="pdf">AED - CSD Report</a>
                     <br>
                     <br>
                     <a href="AED ENTITY DOCS\AED - CSD SUPPLIER NUMBER.pdf" id ="pdf">AED - CSD Suplier Number</a>
                     <br>
                     <br>
                     <a href="AED ENTITY DOCS\AED - IMPORT EXPORT REGISTRATION.pdf" id ="pdf">AED - Import/Export Registration</a>
                     <br>
                     <br>
                     <a href="AED ENTITY DOCS\AED - TAX COMPLIANCE STATUS PIN ISSUED 2021.pdf" id ="pdf">AED - Tax Compliance Status Pin</a>
                     <br>
                     <br>
                     <a href="AED ENTITY DOCS\AED  VAT REGISTRATION CERTIFICATE - SMALL.pdf" id ="pdf">AED - VAT Registration Certificate</a>
                     <br>
                     
                    </div>


                </section>
                  
                <section id = footer>
                  <div class = "col-1">
                    <h1>Useful Links</h1>
                    <a href = "index.php" >Home</a>
                    <a href = "catalogue.php" >Catalogues</a>
                    <a href = "about.php" >About us</a>
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
                    <form action="about.php">
                    <h1>We deliver straight to your door!</h1>
                  
                      
                  <button type = "submit">Find out more</button>
                    </form>
                    
                  
                    
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
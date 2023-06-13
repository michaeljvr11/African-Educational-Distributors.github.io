
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

                <div id = "pre-header">
                  <h1>
                    View our extensive catalogue for each and EVERY subject you need:
                  </h1>
                  <p> 
                    Our Catalogue consists of high quality imported DVD's and educational materials that cover a vast number of topics.
                    These DVD's offer extremely specialized lessons that will suplement any lecture given at your university! 
                    Download the content from these DVD’s onto your server so students can stream from their computers, tablets or mobile devices. 
                  </p>
                  <br>

                    <p>
                      (click on the subheadings below to view the catalogue of available products for each item)
                    </p>
                    <div class="line"></div>


                    <h1>
                      Want to Place an Order?
                    </h1>
                    <p>
                      Send us an e-mail with the titles you are interested in, and we will come back to you with an invoice!
                    </p>
                      
                    <div class="line"></div>

                </div>


                <section id = "catbody">

          

            <div class="dropdown">
              <a href = "Catalogues\HSAED - AGRI PLANT CROP AND SOIL SCIENCE.pdf">
              <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '1' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
              </a>
              <div class="dropdown-content">
                  <ul>
                      <li class="dropdown-item">
                      <?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '1' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?>
                      </li>
                      
                     
                  </ul>
              </div>
          </div>



   

  <div class="dropdown">
    <a href = "Catalogues\HSAED - ARCHITECTURE AND INTERIOR DESIGN (002).pdf"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '22' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?></a>
    <div class="dropdown-content">
        <ul>
            <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '22' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
           
        </ul>
    </div>
</div>

<div class="dropdown">
  <a href = "Catalogues\HSAED - ART AND DESIGN TITLES IN STOCK.pdf"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '2' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?></a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item">
          <?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '2' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?>
          </li>
          
         
      </ul>
  </div>
</div>

<div class="dropdown">
  <a href = "Catalogues\HSAED - BIOLOGY BIOTECHNOLOGY GENETICS.pdf">
  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '3' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
  </a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '3' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
         
      </ul>
  </div>
</div>

<div class="dropdown">
  <a href = "Catalogues\HSAED - BUSINESS TITLES IN STOCK.pdf">
  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '4' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
  </a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '4' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
         
      </ul>
  </div>
</div>

<div class="dropdown">
  <a href = "Catalogues\HSAED - EDU TITLES IN STOCK.pdf">
  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '5' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
  </a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '5' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
         
      </ul>
  </div>
</div>

<div class="dropdown">
  <a href = "Catalogues\HSAED - ENGINEERING TITLES IN STOCK 2015.pdf">
  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '21' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
  </a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '21' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
         
      </ul>
  </div>
</div>



<div class="dropdown">
  <a href = "Catalogues\HSAED - FASHION  CLOTHING PROD TITLES IN STOCK.pdf"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '6' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?></a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '6' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
         
      </ul>
  </div>
</div>

<div class="dropdown">
  <a href = "Catalogues\HSAED - FOOD SCIENCE AND TECHNOLOGY.pdf"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '7' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?></a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '7' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
         
         
      </ul>
  </div>
</div>

<div class="dropdown">
  <a href = "Catalogues\HSAED - FORENSICS AND POLICE SCIENCE.pdf"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '8' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?></a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '8' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
         
      </ul>
  </div>
</div>

<div class="dropdown">
  <a href = "Catalogues\HSAED - ENVIRONMENTAL STUDIES AND GEOGRAPHY.pdf"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '9' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?></a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '9' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
         
      </ul>
  </div>
</div>

<div class="dropdown">
  <a href = "Catalogues\HSAED - HOSPITALITY  FOOD SERVICES TITLES IN STOCK.pdf"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '10' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?></a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '10' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
         
      </ul>
  </div>
</div>

<div class="dropdown">
  <a href = "Catalogues\HSAED - LIFE ORIENTATION TITLES IN STOCK.pdf"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '11' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?></a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '11' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
         
      </ul>
  </div>
</div>

<div class="dropdown">
  <a href = "Catalogues\HSAED - MARITIME STUDIES TITLES IN STOCK.pdf"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '12' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?></a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '12' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
         
      </ul>
  </div>
</div>

<div class="dropdown">
  <a href = "Catalogues\HSAED - MATHS HOUSE MATERIAL.pdf"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '13' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?></a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '13' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
         
      </ul>
  </div>
</div>

<div class="dropdown">
  <a href = "Catalogues\HSAED - MEDIA AND PUBLIC RELATIONS.pdf"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '14' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?></a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '14' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
         
         
      </ul>
  </div>
</div>

<div class="dropdown">
  <a href = "Catalogues\HSAED - MEDICAL TITLES IN STOCK.pdf"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '15' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?></a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '15' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
         
      </ul>
  </div>
</div>


<div class="dropdown">
  <a href = "Catalogues\HSAED - PSYCHOLOGY TITLES IN STOCK.pdf"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '16' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?></a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '16' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
         
      </ul>
  </div>
</div>



<div class="dropdown">
  <a href = "Catalogues\HSAED - SCIENCE.pdf"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '17' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?></a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '17' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
         
      </ul>
  </div>
</div>

<div class="dropdown">
  <a href = "Catalogues\HSAED - RADIOLOGY TITLES IN STOCK.pdf"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '18' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?></a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '18' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
         
      </ul>
  </div>
</div>

<div class="dropdown">
  <a href = "Catalogues\DRUGS SUBSTANCE ABUSE.pdf"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '19' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?></a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '19' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
         
      </ul>
  </div>
</div>

<div class="dropdown">
  <a href = "Catalogues\HSAED - TOURISM.pdf"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '20' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?></a>
  <div class="dropdown-content">
      <ul>
          <li class="dropdown-item"><?php
require_once 'connections.php';
$sql = "SELECT * FROM subcategories WHERE SubjectID = '20' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["Category"]; 
    echo nl2br (" \n");
   

  }
}
?></li>
          
         
      </ul>
  </div>
</div>




                
            
                </section>
           
                  

                </body>

                <!---footer-->

                <section id = footer>
                  <div class = "col-1">
                    <h1>Useful Links</h1>
                    <a href = "index.php" >Home</a>
                    <a href = "accreditations.php" >Accreditions</a>
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
                    <form action= "about.php">
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


              <script src="js/aed.js"></script>

                </html>
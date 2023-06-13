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

    <!----glider css-->

  <link rel = "stylesheet" href = "css/glider.min.css">
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
                          <a href="#" class = "active" >Home</a>
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
          <!--end of header-->

          <!---hero--->

          <section id = "hero">
            
            <h1>
              The BEST In Audiovisual & Training Material!
            </h1>
            <p>
              View Our Selection of DVD's, Models And Posters For Education
            </p>

            <h2>
              We have what you need in Business, Engineering, Nursing, Agriculture & More
            </h2>
            <form action="catalogue.php">
            <button>Shop Now</button>
            </form>
            
          

              

          </section>

          <!--end of hero-->

          <h1 class = "announcement">
            What We Offer:
          </h1>

          <div class="container">
            <div class="columndvd">
                <h2 class="title">DVDs</h2>
                Our wide selection of DVD's are a great tool to use in the lecture room, 
                and have been assisting in university education around the country for decades.
                Download our content onto your server to be stored digitally and used whenever you need.
                Our content is highly specialised and we guarantee we can provide exactly the material you are looking for.
            </div>
            <div class="columnmodel">
                <h2 class="title">Models</h2>
                We source models that can be used in your university.
                Models allow students to learn visually and interact with the lesson in a practical manner.
            </div>
            <div class="columnposters">
                <h2 class="title">Posters</h2>
                The walls are your canvas and so are your student's minds! Liven up the room 
                with our high-quality educational posters to fit your needs.
            </div>
        </div>

          <!--New Products & Items Slider-->

          <section class = "p-slider">

            <h1 class = product-slider-heading>
              Subjects Include:
            </h1>

            <!-----buttons-->

            <div class="slider-btns">
              <button aria-label="Previous" class="glider-prev">
                <span></span>
              </button>
              <button aria-label="Next" class="glider-next">
                <span></span>
              </button>
            </div>

            <div class="glider-contain">
              <div class="glider">
                <div class = product-box>
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/business.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                  <!--Title-->
                  <a href = "#" class = "product-title">
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
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>

                <div class = product-box>

                  
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/engineering.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                 
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
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
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                    
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>

                <div class = product-box>

                
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/nursing.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
                  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '15' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
                  </a>
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
               
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>


                <div class = product-box>

                
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/agriculture.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                 
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
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
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                   
                    <a href = "#" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>


                <div class = product-box>

                  
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/psychology.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
                  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '16' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
                  </a>
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                  
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>

                <div class = product-box>

              
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/tourism.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
                  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '20' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
                  </a>
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                  
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>

                <div class = product-box>

                 
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/hospitality.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                 
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
                  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '10' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
                  </a>
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                   
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>

                <div class = product-box>

                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/math.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                  
                  
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
                  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '13' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
                  </a>
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                   
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>

                <div class = product-box>

                 
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/art&design.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                 
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
                  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '2' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
                  </a>
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                   
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>

                <div class = product-box>

                 
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/biology.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                 
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
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
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                   
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>

                <div class = product-box>

                 
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/geography.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                 
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
                  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '9' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
                  </a>
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                   
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>

                <div class = product-box>

                 
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/foodscience.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                 
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
                  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '7' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
                  </a>
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                   
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>

                <div class = product-box>

                 
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/fashion.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                 
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
                  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '6' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
                  </a>
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                   
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>

                <div class = product-box>

                 
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/architecture.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                 
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
                  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '22' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
                  </a>
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                   
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>

                <div class = product-box>

                 
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/education.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                 
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
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
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                   
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>
                
                <div class = product-box>

                 
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/forensic.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                 
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
                  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '8' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
                  </a>
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                   
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>

                <div class = product-box>

                 
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/maritime.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                 
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
                  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '12' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
                  </a>
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                   
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>


                <div class = product-box>

                 
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/media.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                 
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
                  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '14' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
                  </a>
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                   
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>


                <div class = product-box>

                 
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/radiology.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                 
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
                  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '18' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
                  </a>
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                   
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>

                <div class = product-box>

                 
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/phsyics.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                 
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
                  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '17' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
                  </a>
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                   
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>

                <div class = product-box>

                 
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/socialwork.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                 
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
                  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '19' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
                  </a>
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                   
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>

                <div class = product-box>

                 
                  <!--img container-->
                  <div class="p-img-container">
                    <div class="p-img">
                      <a href = "#">
                        <img src = "img/lifeorientation.jpg" class = "p-img-front" alt = "Front">
                        <img src = "img/see.png" class = "p-img-back" alt = "Back">
                      </a>
                    </div>
                  </div>
              
    
                <!--text-->
    
                <div class = "p-box-text">
                 
    
                  <!--Title-->
                  <a href = "#" class = "product-title">
                  <?php
require_once 'connections.php';
$sql = "SELECT * FROM subjects WHERE SubjectID = '11' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){


    echo $row["SubjectName"];
   

  }
}

?>
                  </a>
    
                  <!--price-to-buy-->
    
                  <div class="price-buy">
                   
                    <a href = "catalogue.php" class = p-buy-btn>Shop Now</a>
                  </div>
                </div>
                </div>

              </div>
            
              
              <div role="tablist" class="dots"></div>
            </div>

            

          </section>


          <!----end of slider ----------------------------->

          <!--bottom-->

          <section id = footer>
              <div class = "col-1">
                <h1>Useful Links</h1>
                <a href = "catalogue.html" >Catalogues</a>
                <a href = "accreditations.html" >Accreditions</a>
                <a href = "about.html" >About us</a>
              </div>
              <div class = "col-2">
                <h1>Newsletter</h1>
                <form method = "post">
                  <input id = "email" type = "e-mail" name = "email" placeholder = "Your E-mail Address" required>
                  <br>
                  <button type = "submit">Subscribe Now</button>
                </form>
              </div>
              <div class = "col-3">
                <form action = "about.php">
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

        <!----glider js-->

          <script src = "js/glider.min.js"></script>

          <!----script-->


          <script src = "js/aed.js"></script>

  </body>
  </html>
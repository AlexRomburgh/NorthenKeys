<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Welcome to the most extraordinary hotel in Boston Massachusetts">
  <meta name="keywords" content="hotel,boston hotel,new england hotel">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" media= "screen and (max-width: 768px)" href="css/mobile.css">
  
  <title>Welcome To Northen Keys And Stamps</title>
  
</head>
<style>
  .product {
    margin-top: 30px;
    position: sticky;
    position: -webkit-sticky;
    top: 0;
   
}


.product-category {
  padding: 0 10vw;
  font-size: 30px;
  font-weight: 500;
  margin-bottom: 40px;
  text-transform: capitalize;
}

.product-container {
  padding: 0 5vw;
  display: flex;
  overflow-x: auto;
  scroll-behavior: smooth;
  background: white;

}

.product-container::-webkit-scrollbar {
  display: none;
}

.product-card {
  flex: 0 0 auto;
  width: 250px;
  height: 450px;
  margin-right: 40px;
  position: relative;
  
}

.product-image {
  position: relative;
  width: 100%;
  height: 350px;
  overflow: hidden;
  
  
}

.product-thumb {
  width: 100%;
  height: 100%;
  object-fit: cover;
  margin-top: 20px;
}

.product-info {
  width: 100%;
  height: 100px;
  padding-top: 10px;
}

.product-brand {
  text-transform: uppercase;
}

.examples {
  margin-top: 70px;
  text-align: center;
  text-decoration: underline;
  
  
  
}

.pre-btn,
.nxt-btn {
  border: none;
  width: 5vw;
  height: 100%;
  position: absolute;
  top: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #fff 100%);
  cursor: pointer;
  z-index: 8;
}

.pre-btn {
  left: 0;
  transform: rotate(180deg);
}

.nxt-btn {
  right: 0;
}

.pre-btn img,
.nxt-btn img {
  opacity: 0.2;
  
}

.pre-btn:hover img,
.nxt-btn:hover img {
  opacity: 1;
}

.collection-container {
  width: 100%;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 10px;
  margin-top: 30px;
}

.collection {
  position: relative;
 
}

.collection img {
  
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: relative;
  
 
}

.collection p {
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: #fff;
  font-size: 50px;
  text-transform: capitalize;
}


</style>


<body id="home">
  <header class="hero">
    <div id="navbar" class="navbar top">
      <h1 class="logo">
        <span class="text-primary"><i class="fas fa-solid fa-lock"></i> Northen keys </span
        >And Stamps
      </h1>
      <nav>
        <ul>

        
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="">Cart <i class="fa fa-shopping-cart fa-1x"></i></
         
        </ul>
      </nav>
    </div>

    <div id="showcase">
      <div class="container">
        <div class="showcase-content">
          <h1><span class="text-primary">Locksmith Supplies and Services</span></h1>
          <p class ="lead">We've Got You Covered</p>
          <a class="btn" href="about.php">About Our Business</a>
        </div>
      </div>
    </div>
  </header>

  <section id="home-info" class="bg-dark">
    <div class="info-img"></div>
    <div class="info-content">
      <h2><span class="text-primary">The History</span> Of Our Business</h2>
      <p>
        As we have been supplying top quality locks since 1962, we are able to offer Quality locks at affordable rates. We operate on a quantity system which allowes us to offer substantial discounts on mass orders. Whether you need help getting your car opened, needing spare keys, numberplates, car remotes and programming as well as stamps- We've got you covered! 
        <br></br>
        <a href="products.php" class="btn btn-light">View Products</a>
      </p>
      
      
      
    </div>
    
  </section>
  

  <section id="features">
    <div class="box bg-light">
      <i class="fas fa-solid fa-lock fa-3x"></i>
      <h3>Locksmithing Services</h3>
        
       <ul class="list">
        <li>Safes opened - Keys made to all Locks</li>
        <li>All Transponder activated Cars opened</li>
        <li>Programming Transponder Car Keys</li>

       </ul>
         
      
        
    </div>
    <div class="box bg-primary">
        <i class="fas fa-solid fa-stamp fa-3x"></i>
        <h3>Rubber Stamps</h3>
        <ul class="list">
          <li>Large Range of self inking stamps</li>
          <li>Manaul hand stamps using seperate ink pad</li>
          <li>Ink pads and color ink</li>
  
         </ul>
    </div>


    <div class="box bg-light">
        <i class="fas fa-solid fa-id-card fa-3x"></i>
        <h3>Numberplates</h3>
        <ul class="list">
          <li>We make numberplates while you wait</li>
          <li>Car - Bike - Trailer</li>
          <li>Acrylic and Aluminium style</li>
  
         </ul>
    </div>

    <div class="box bg-light">
        <i class=" fas fa-solid fa-wallet fa-3x"></i>
        <h3>Payment Details</h3>
        <ul class="list">
          <li>We only accept cash upon delivery of product</li>
         <br>
         <br>
          
  
         </ul>
    </div>
    <div class="box bg-primary">
        <i class="fas fa-solid fa-truck fa-3x"></i>
        <h3>Delivery Details</h3>
        <ul class="list">
          <li>all Products delivered at a R50 fee</li>
          <li>Shipping priced calculated off price based shipping rates</li>
          <br>
         
  
         </ul>
    </div>
    <div class="box bg-light">
        <i class="fas fa-solid fa-info fa-3x"></i>
        <h3>Order Details</h3>
        <ul class="list">
          <li>When a product is received client signature is requested to confirm product is received</li>
          <li>You will get notified when your order is on its way!</li>
  
         </ul>
    </div>

    
  </section>
  
  <div class="clr"></div>

  
  <!-- Transponder Key for different car images code -->
  <div class="examples">
  <h1 >VIEW SOME TRANSPONDER KEYS DEVELOPED FOR VARIOUS CAR BRANDS:</h1>
  </div>
  <section class="product"> 
  
        <button class="pre-btn"><img src="transponderimg/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="transponderimg/arrow.png" alt=""></button>
        <div class="product-container">
           
            <div class="product-card">
                <div class="product-image">
                    <img src="transponderimg/i20.jpg" class="product-thumb" alt="">
                   
                </div>
                <div class="product-info">
                    <h2 class="product-brand"><?php
                    require_once 'connection.php';
                    $sql = "SELECT * FROM transpoderkeys WHERE car_id = '1' ";
                    $result = mysqli_query($con, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                      while ($row = mysqli_fetch_assoc($result)){
                        echo $row["carname"] . "<br>";
                         
                      }
                    }
                    ?>
                    </h2>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    
                    <img src="transponderimg/landrover.jpg" class="product-thumb" alt="">
                    
                </div>
                <div class="product-info">
                    <h2 class="product-brand"><?php
                    require_once 'connection.php';
                    $sql = "SELECT * FROM transpoderkeys WHERE car_id = '2' ";
                    $result = mysqli_query($con, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                      while ($row = mysqli_fetch_assoc($result)){
                        echo $row["carname"] . "<br>";
                         
                      }
                    }
                    ?>
                    </h2>
                </div>

            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="transponderimg/Peugeot.jpg" class="product-thumb" alt="">
                </div>
                <div class="product-info">
                    <h2 class="product-brand"><?php
                    require_once 'connection.php';
                    $sql = "SELECT * FROM transpoderkeys WHERE car_id = '3' ";
                    $result = mysqli_query($con, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                      while ($row = mysqli_fetch_assoc($result)){
                        echo $row["carname"] . "<br>";
                         
                      }
                    }

                    ?>
                </h2>
                </div>

            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="transponderimg/polo.jpg" class="product-thumb" alt="">
                </div>
                <div class="product-info">
                    <h2 class="product-brand"> <?php
                    require_once 'connection.php';
                    $sql = "SELECT * FROM transpoderkeys WHERE car_id = '4' ";
                    $result = mysqli_query($con, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                      while ($row = mysqli_fetch_assoc($result)){
                        echo $row["carname"] . "<br>";
                         
                      }
                    }

                ?>
                </h2>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="transponderimg/honda.jpg" class="product-thumb" alt="">
                </div>
                <div class="product-info">
                    <h2 class="product-brand"> <?php
                    require_once 'connection.php';
                    $sql = "SELECT * FROM transpoderkeys WHERE car_id = '5' ";
                    $result = mysqli_query($con, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                      while ($row = mysqli_fetch_assoc($result)){
                        echo $row["carname"] . "<br>";
                         
                      }
                    }

                ?>
                </h2>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="transponderimg/corolla.jpg" class="product-thumb" alt="">
                </div>
                <div class="product-info">
                    <h2 class="product-brand"> <?php
                    require_once 'connection.php';
                    $sql = "SELECT * FROM transpoderkeys WHERE car_id = '6' ";
                    $result = mysqli_query($con, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                      while ($row = mysqli_fetch_assoc($result)){
                        echo $row["carname"] . "<br>";
                         
                      }
                    }

                    ?></h2>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="transponderimg/landcruiser.jpg" class="product-thumb" alt="">
                   
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Toyota Landcruiser</h2>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="transponderimg/MercedesGL.jpg" class="product-thumb" alt="">
                </div>
                <div class="product-info">
                <h2 class="product-brand">Mercedes GL 320</h2>
                </div>
            </div>
        </div>
    </section>



  <footer id="main-footer">
    <p>Northen Keys And Stamps; 1962, All RIghts Reserved</p>
  </footer>
  <script src="js/script.js"></script>
</body>
</html>
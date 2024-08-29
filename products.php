<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Welcome to the most extraordinary hotel in Boston Massachusetts">
  <meta name="keywords" content="hotel,boston hotel,new england hotel">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="css/products.css">
  <link rel="stylesheet" media= "screen and (max-width: 768px)" href="css/mobile.css">
  
  
  
  <title>Welcome To Northen Keys And Stamps</title>
</head>
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
          <li><a href="#cart">Cart <i class="fa fa-shopping-cart fa-1x"></i></
         
        </ul>
      </nav>
    </div>
   
    <main>

   
<div class="card">
<div class="image">
  <img src="productimg/gate.jpeg" alt="">
  </div>
  <div class="caption" >
    <p class="rate">
    
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    
 
    </p>
    <?php
require_once 'connection.php';
$sql = "SELECT * FROM product WHERE product_id = '1' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){
    echo $row["product_name"] . "<br>";
    echo "New Price:  &nbsp";
    echo "R";
    echo $row["price"] . "<br>"; 
    echo "Original Price:  &nbsp";
    echo "R";
    echo $row["discount"] ."<br>"; 
  }
}

?>
  </div>
  <button class="add">Add to Cart</button>
</div>


<div class="card">
<div class="image">
  <img src="productimg/trans.jpg" alt="">
  </div>
  <div class="caption" >
    <p class="rate">
    
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    
 
    </p>
  
    <?php
require_once 'connection.php';
$sql = "SELECT * FROM product WHERE product_id = '2' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){
    
  
    echo $row["product_name"] . "<br>";
    echo "New Price:  &nbsp";
    echo "R";
    echo $row["price"] . "<br>"; 
    echo "Original Price:  &nbsp";
    echo "R";
    echo $row["discount"] ."<br>"; 
     
  }
}

?>
  </div>
  <button class="add">Add to Cart</button>
</div>



<div class="card">
<div class="image">
  <img src="productimg/doorkey.jpg" alt="">
  </div>
  <div class="caption" >
    <p class="rate">
    
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    
 
    </p>
    <?php
require_once 'connection.php';
$sql = "SELECT * FROM product WHERE product_id = '3' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){
    
    
    echo $row["product_name"] . "<br>";
    echo "New Price:  &nbsp";
    echo "R";
    echo $row["price"] . "<br>"; 
    echo "Original Price:  &nbsp";
    echo "R";
    echo $row["discount"] ."<br>"; 
     
  }
}

?>
  </div>
  <button class="add">Add to Cart</button>
</div>


<div class="card">
<div class="image">
  <img src="productimg/customStamp.jpg" alt="">
  </div>
  <div class="caption" >
    <p class="rate">
    
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
 
    </p>
    <?php
require_once 'connection.php';
$sql = "SELECT * FROM product WHERE product_id = '4' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){
    

    echo $row["product_name"] . "<br>";
    echo "New Price:  &nbsp";
    echo "R";
    echo $row["price"] . "<br>"; 
    echo "Original Price:  &nbsp";
    echo "R";
    echo $row["discount"] ."<br>"; 
     
  }
}

?>
  </div>
  <button class="add">Add to Cart</button>
</div>


<div class="card">
<div class="image">
  <img src="productimg/stamp.jpeg" alt="">
  </div>
  <div class="caption" >
    <p class="rate">
    
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
 
    </p>
    <?php
require_once 'connection.php';
$sql = "SELECT * FROM product WHERE product_id = '5' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){
    
   
    echo $row["product_name"] . "<br>";
    echo "New Price:  &nbsp";
    echo "R";
    echo $row["price"] . "<br>"; 
    echo "Original Price:  &nbsp";
    echo "R";
    echo $row["discount"] ."<br>"; 
     
  }
}

?>
  </div>
  <button class="add">Add to Cart</button>
</div>


<div class="card">
<div class="image">
  <img src="productimg/keysafe.jpeg" alt="">
  </div>
  <div class="caption" >
    <p class="rate">
    
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    
 
    </p>
    <?php
require_once 'connection.php';
$sql = "SELECT * FROM product WHERE product_id = '7' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){
    
 
    echo $row["product_name"] . "<br>";
    echo "New Price:  &nbsp";
    echo "R";
    echo $row["price"] . "<br>"; 
    echo "Original Price:  &nbsp";
    echo "R";
    echo $row["discount"] ."<br>"; 
     
  }
}

?>
  </div>
  <button class="add">Add to Cart</button>
</div>


<div class="card">
<div class="image">
  <img src="productimg/digitalsafe.jpeg" alt="">
  </div>
  <div class="caption" >
    <p class="rate">
    
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    
 
    </p>
    <?php
require_once 'connection.php';
$sql = "SELECT * FROM product WHERE product_id = '8' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){
    
   
    echo $row["product_name"] . "<br>";
    echo "New Price:  &nbsp";
    echo "R";
    echo $row["price"] . "<br>"; 
    echo "Original Price:  &nbsp";
    echo "R";
    echo $row["discount"] ."<br>"; 
     
  }
}

?>
  </div>
  <button class="add">Add to Cart</button>
</div>


<div class="card">
<div class="image">
  <img src="productimg/paddlock.jpeg" alt="">
  </div>
  <div class="caption" >
    <p class="rate">
    
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    
 
    </p>
    <?php
require_once 'connection.php';
$sql = "SELECT * FROM product WHERE product_id = '9' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){
    
   
    echo $row["product_name"] . "<br>";
    echo "New Price:  &nbsp";
    echo "R";
    echo $row["price"] . "<br>"; 
    echo "Original Price:  &nbsp";
    echo "R";
    echo $row["discount"] ."<br>"; 
     
  }
}

?>
  </div>
  <button class="add">Add to Cart</button>
</div>


<div class="card">
<div class="image">
  <img src="productimg/securitygate.jpg" alt="">
  </div>
  <div class="caption" >
    <p class="rate">
    
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
 
    </p>
    <?php
require_once 'connection.php';
$sql = "SELECT * FROM product WHERE product_id = '10' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){
    

    echo $row["product_name"] . "<br>";
    echo "New Price:  &nbsp";
    echo "R";
    echo $row["price"] . "<br>"; 
    echo "Original Price:  &nbsp";
    echo "R";
    echo $row["discount"] ."<br>"; 
     
  }
}

?>
  </div>
  <button class="add">Add to Cart</button>

</div>


<div class="card">
<div class="image">
  <img src="productimg/electriclock.jpeg" alt="">
  </div>
  <div class="caption" >
    <p class="rate">
    
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    <i class="fas fa-solid fa-star"></i>
    
 
    </p>
    <?php
require_once 'connection.php';
$sql = "SELECT * FROM product WHERE product_id = '11' ";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){
    
  
    echo $row["product_name"] . "<br>";
    echo "New Price:  &nbsp";
    echo "R";
    echo $row["price"] . "<br>"; 
    echo "Original Price:  &nbsp";
    echo "R";
    echo $row["discount"] ."<br>"; 
     
  }
}

?>
  </div>
  <button class="add">Add to Cart</button>
</div>



</main>

<footer id="main-footer">
    <p>Northen Keys And Stamps; 1962, All RIghts Reserved</p>
  </footer>

</body>
</html>
<!-- PHP CODE FOR STORING AND SAVING TO DATABASE -->
<?php
session_start();
//WE NEED THIS SO WE CAN USE THE FUNCIONS AND CONNECTION WE NEED
include("connection.php");
include("functions.php");

$user_data = check_login($con);


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  //SOMETHING WAS POSTED BY USER
  //CREATING VARIABLES TO STORE THE FIELDS
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  


 // THIS CODE IS THE QUERY USED TO INSERT THE DATA INTO THE DATABASE
  $query = "insert into contact (name,email,message) values ('$name','$email','$message')";

  //SAVE IT
  mysqli_query($con,$query);
  header("Location: contact.php");
  die;

  
}

?>



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

 <section id="contact-form" class="py-3">
  <div class="container">
  <h1 class="l-heading"><span class="text-primary">Contact	</span>Us</h1>
  <p>Please fill out the form below to contact us:</p>
  <form action="contact.php" method = "post" >
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" placeholder=" Enter Name:">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" placeholder=" Enter Email:">
    </div>
    <div class="form-group">
      <label for="Message">Message</label>
      <input type="text" name = "message" id="message" placeholder=" Enter Message:"> </div>
    </div>
    <button type="submit" class="btn">Submit</button>
  </form>
  </div>
 </section>
 

  <section id="contact-info" class="bg-dark">
    <div class="container">
      <div class="box">
        <i class="fas fa-hotel fa-3x"></i>
        <h3>Location</h3>
        <p>233a Voortrekker Road Parow</p>
      </div>
      <div class="box">
          <i class="fas fa-phone fa-3x"></i>
          <h3>Phone Number</h3>
          <p>(082) 455 6322</p>
      </div>
      <div class="box">
          <i class="fas fa-envelope fa-3x"></i>
          <h3>Email Address</h3>
          <p>northernkeys@telkomsa.net</p>
      </div>
    </div>
    
  </section>
  <footer id="main-footer">
    <p>Northen Keys And Stamps; 1962, All RIghts Reserved</p>
  </footer>
</body>
</html>
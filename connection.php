<!-- ESTABLISHING A CONNECTION TO THE DATABASE -->
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "addtocart";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
  die("Failed to connect to the database");
}
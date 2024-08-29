<?php
 
function check_login($con)
{

  if(isset($_SESSION['query_id']))
  {

    $id = $_SESSION['query_id'];
    $query = "select * from contact where query_id = '$id' limit 1";
  //WERE USING RESULT SO WE CAN FETCH THE DATA IF THERE IS ANY DATA IN THE ROWS
  $result = mysqli_query($con,$query);
  if($result && mysqli_num_rows($result)>0)
  {
    $user_data = mysqli_fetch_assoc($result);
    return $user_data;
  }


  }




}


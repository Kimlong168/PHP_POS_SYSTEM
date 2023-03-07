<?php
  // cookie
  session_set_cookie_params(7*24*60*60);

  session_start();

  if(!(isset($_SESSION['username']))){

    header("Location: /login?ref=". $_SERVER['PHP_SELF']);
    exit();

  }

 $i=0;

 $title ="Home";

//  if(isset($_GET['userId'])){
//   $userId = $_GET['userId'];
//  }else{
//   $userId = 1;
//  }
 
 $result1 = mysqli_query($database,"SELECT * FROM mytable where productType=1 ORDER BY productName");
 $result2 = mysqli_query($database,"SELECT * FROM mytable where productType=2 ORDER BY productName");
 $result3 = mysqli_query($database,"SELECT * FROM mytable where productType=3 ORDER BY productName");
     
 require('view/index.view.php');


  
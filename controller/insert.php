<?php
// cookie
session_set_cookie_params(7*24*60*60);
session_start();

if(!(isset($_SESSION['username']))){

  header("Location: /login?ref=". $_SERVER['PHP_SELF']);
  exit();

}

$message = '';
$textColor = 'text-danger';
if(isset($_POST['name']) && isset($_POST['type']) && isset($_POST['price']) && isset($_POST['img'])){

  if($_POST['name'] == '' ||  $_POST['type'] == '' ||  $_POST['price'] == '' ||  $_POST['img'] == ''){

    $message = "<h1>Please Input all the informations!</h1>"; 

  }
  else{

    $name = $_POST['name'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $img="assets/" . $_POST['img'];

     
    $sql = "INSERT INTO mytable ( productName, productType, productPrice, productImg) VALUES ('{$name}',{$type},{$price},'{$img}');";
    mysqli_query($database,$sql);
    
    $message =  "<h1>Item is added successfully!</h1>"; 
    $textColor = "text-success";
  }
    
}

$title ="Insert";

require('view/insert.view.php');


<?php
// cookie
session_set_cookie_params(7*24*60*60);
session_start();

if(!(isset($_SESSION['username']))){

  header("Location: /login?ref=". $_SERVER['PHP_SELF']);
  exit();

}
$message = '';
$check=false;
$textColor = 'text-danger';

if(isset($_GET['id']) &&  isset($_GET['name']) && isset($_GET['type']) && isset($_GET['price']) && isset($_GET['img'])  && isset($_GET['img1'])){

 if($_GET['id'] == '' || $_GET['name'] == '' ||  $_GET['type'] == '' ||  $_GET['price'] == ''){
 
    $message = "<h2>Please Input all the informations!</h2>"; 

  }else if($_GET['img1'] == '' &&  $_GET['img'] == ''){

    $message = "<h2>Choose Image!!!</h2>"; 

  }
  else{

    if($_GET['img'] == ''){
        $img=$_GET['img1'];
    }else{
        $img ="assets/" . $_GET['img'];
    }

    $id = $_GET['id'];
    $name = $_GET['name'];
    $type = $_GET['type'];
    $price = $_GET['price'];

    $sql = "UPDATE mytable SET id={$id} , productName='{$name}', productType={$type} , productPrice={$price} , productImg='{$img}' WHERE id =  {$_GET['id']} ";
    mysqli_query($database,$sql);
    
    $message =  "<h2>Product is updated successfully!</h2>"; 
    $check=true;
    $textColor = "text-success";
  }
    
}

$title ="Update";

require('view/update.view.php');



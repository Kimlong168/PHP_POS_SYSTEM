<?php
// cookie
session_set_cookie_params(7*24*60*60);
session_start();

if(!(isset($_SESSION['username']))){

  header("Location: /login?ref=". $_SERVER['PHP_SELF']);
  exit();

}

$id = $_GET['idd'];

mysqli_query($database,"DELETE FROM mytable WHERE id={$id}");

header('localtion:index.php');

$title ="Delete";

require('view/delete.view.php');



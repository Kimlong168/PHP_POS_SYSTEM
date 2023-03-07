<?php

session_set_cookie_params(7*24*60*60);

session_start();

$message = '';

$textColor = 'text-danger';

if(isset($_GET['username']) && isset($_GET['password'])){

  if($_GET['username'] == '' ||  $_GET['password'] == ''){
    
    $message = "Input username and password!!!"; 

  }
  else{

        $username = $_GET['username'];
        $password = $_GET['password'];
    
        $isLogin = false;

        while($data = mysqli_fetch_assoc($user)){

            if(($username == $data['username'] || $username == $data['email']) &&  $password == $data['passwordd']){

                $isLogin = true;
                $message = "Login successfully!!!"; 
                $textColor = 'text-success';


                $_SESSION['username']=$data['username'];

                if(isset($_GET['ref']))

                    header("Location: ". $_GET['ref']);

                else

                    header("Location: /");

                exit();
            
                }

        }

        if(!$isLogin){

            $message =  "Wrong Password, Email or Username"; 
            
        }

  }
    
}

$title ="Login";

require('view/login.view.php');




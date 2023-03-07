<?php

$message='';

$textColor = 'text-danger';

    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['repassword'])){

        if($_POST['username'] == '' ||  $_POST['email'] == '' ||  $_POST['password'] == '' ||  $_POST['repassword'] == ''){

            $message = "Please Input all the informations!"; 
        
        }
        else{

            $isSignUp = true;

            while($data = mysqli_fetch_assoc($user)){

              if($_POST['email'] == $data['email']){

                  $isSignUp = false;
                  $message = "Your email is already used!"; 
                  $textColor = 'text-danger';
                  break;

              }

            }

            if($isSignUp){

              if($_POST['password'] == $_POST['repassword']){

                $username = $_POST['username'];
                $email = $_POST['email'];
                $repassword= $_POST['repassword'];
                
                $sql = "INSERT INTO users ( username, email, passwordd) VALUES ('{$username}','{$email}','{$repassword}');";
                mysqli_query($database,$sql);
                
                $message="sign up successfully";
                $textColor = "text-success";

                header("Location: /login");
                exit();
                
              }else{
                $message= "Your password doesn't match!!!";
              }

            }
        
        }
    }

    $title ="Sign Up";

    require('view/signup.view.php');



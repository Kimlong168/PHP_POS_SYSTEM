<?php 
  // cookie
  session_set_cookie_params(7*24*60*60);

  session_start();

  if(!(isset($_SESSION['username']))){

    header("Location: /login?ref=". $_SERVER['PHP_SELF']);
    exit();

  }
     
    $filterType= 'productName';

    if(isset($_GET['filter'])){

      $filterType= $_GET['filter'];

    }

    if(isset($_GET['search'])){

        if($_GET['search']==''){

          $search='id > 0';

        }else{

          if(is_numeric($_GET['search'])){

            $search = "productPrice = '" . $_GET['search'] ."'";

          }else if(strtolower($_GET['search']) == "food"){

            $search = "productType = 1";

          }else if(strtolower($_GET['search']) == "drink"){

            $search = "productType = 2";

          }else if(strtolower($_GET['search']) == "coffee"){

            $search = "productType = 3";

          }else{

            $search = "productName LIKE '%". $_GET['search'] ."%'";
            // $search = "productName LIKE '". $_GET['search'] ."%' OR productName LIKE '%". $_GET['search'] ."'";

          }
        
        }

    }else{

      $search='id > 0';

    }

    $title ="Edit";

    require('view/edit.view.php');


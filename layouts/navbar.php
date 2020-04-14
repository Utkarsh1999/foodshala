<?php 
    include('./config/db_config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodShala</title>
    
    <!-- bootstrap links -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="styles/index.css">

</head>
<body>
    <!-- navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">FoodShala</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">MENU <span class="sr-only">(current)</span></a>
      </li>
      <?php 
        if(isset($_SESSION['utype']) && $_SESSION['utype']=="user"){
          ?>
          
      <li class="nav-item">
        <a class="nav-link" href="cart.php">CART</a>
      </li>
      <?php
        } else {
          ?>
      <li class="nav-item">
        <a class="nav-link disabled" href="cart.php" title="Please Login as user to enable this feature">CART</a>
        
      </li>

          <?php
        }
        if(isset($_SESSION['utype']) && ($_SESSION['utype']=="restro")){
          ?>
      
      <li class="nav-item">
        <a class="nav-link" href="add_menu_item.php">+Add</a>
      </li>
      <?php
        }
      ?>
    </ul>
    <div class=" my-2 my-lg-0 row">
      <ul class="navbar-nav">
        <?php 
          if(!isset($_SESSION['utype'])){
            ?>
            
       <li><a href="login.php" class="nav-link">LogIn</a></li>
       <li><a href="signup.php" class="nav-link">Sign Up</a></li> 
       <?php
          }
          else{
            ?>

            <li><a href="logout.php" class="nav-link">LogOut</a></li>     
            <?php
              }
            ?>
      </ul>
    

    
</div>
  </div>
</nav>

  
<!-- <div class="container container-fluid row">
<div class="alert alert-danger col-md-6" role="alert">
  A simple danger alert—check it out!
</div>
</div> -->

    <!-- navbar ends -->
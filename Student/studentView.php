<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
   
    <link href="css/main.css" rel="stylesheet" />
    
  </head>
  <body>
  
    <div class="s131">
     
   

<?php require 'header.php';
session_start();
        ?>
<div class="container w-50">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Student Info</h2>
    </div>
    <div class="card-body">
    <div class="alert alert-info">Account Created Succesful <a href="search.php">Search</a></div>
               
  <p>First Name : <strong><?php echo $_SESSION['fname'];  ?></strong></p>
  <hr>
  <p>Last Name : <strong><?php echo $_SESSION['lname']; ?></strong></p>
  <hr>
  <p>Regno: <strong><?php echo $_SESSION['regno']; ?></strong></p>
  <hr>
  <p>Sex: <strong><?php echo $_SESSION['sex']; ?></strong></p>
  <hr>
  <p>Department: <strong><?php echo $_SESSION['depart']; ?></strong></p>
  <hr>
  <p>Academic Year: <strong><?php echo $_SESSION['academic']; ?></strong></p>
  <hr>
  <p>Level: <strong><?php  echo $_SESSION['level']; ?></strong></p>
               
    </div>
    
  </div>
  
</div>



    </div>

   
  
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>





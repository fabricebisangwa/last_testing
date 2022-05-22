<?php require 'header.php'; ?>
<?php require 'connection.php';

session_start();
        ?>
<div class="container w-50">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Student Info</h2>
    </div>
    <div class="card-body">
    <div class="alert alert-info">Account Created Succesful</div>
               
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
<?php require 'footer.php'; ?>

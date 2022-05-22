<?php
require '../connection.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM student WHERE regno=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
 ?>
 <?php

if (isset($_POST['update'])) {
  
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $sex = $_POST['sex'];
  $depart = $_POST['depart'];
  $academic = $_POST['academic'];
  $level = $_POST['level'];

  if ($academic == "19RP") {
    $acc_Year = "2019-2020"; 
  }
  elseif($academic == "20RP")
  {
    $acc_Year = "2020-2021"; 
  }
  elseif($academic == "21RP")
  {
    $acc_Year = "2021-2022";  
  }
  $sql ="UPDATE student SET fname=:fname, lname=:lname, sex=:sex, depart=:depart, academic=:academic, level=:level WHERE regno=:id";
  $statement = $connection->prepare($sql);
   $status = $statement->execute([
      ':fname' => $fname,
      ':id' => $id,
      ':lname' => $lname, 
      ':sex' => $sex,
      ':depart' => $depart, 
      ':academic' => $acc_Year,
      ':level' => $level
      ]);
  if($status == 1)
  {
    
    header("Location: index.php");
  }
  else {
    header("Location: index.php");
  }
  }
 ?>
<?php require 'header.php'; ?>
<div class="container w-50">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create student</h2>
    </div>
    <div class="card-body">
    <form method="post">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example1"><b>First name</b></label>
        <input value="<?= $person->fname; ?>" type="text"class="form-control" name="fname"/>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example1"><b>Last name</b></label>
        <input value="<?= $person->lname; ?>" type="text" class="form-control" name="lname"/>
      </div>
    </div>
  </div>
  <div class="row mb-4">

    <div class="col">
    <label class="form-label" ><b>Sex</b></label><br>
    <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="sex" value="Male">Male
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="sex" value="Female">Female
  </label>
</div>

    </div>
    <div class="col">
    <label class="form-label" ><b>Department</b></label><br>
    <div class="form-outline">
  <select class="form-control" name="depart">
    <option>IT</option>
    <option>RE</option>
    <option>ET</option>
    <option>MET</option>
  </select>
</div>


    </div>
  </div>
  <div class="row mb-4">
  
    <div class="col">
      <div class="form-outline">
      <label class="form-label" ><b>Accademic Year</b></label><br>
      <div class="form-outline">
  <select class="form-control" name="academic">
    <option value="19RP">2019-2020</option>
    <option value="20RP">2020-2021</option>
    <option value="21RP">2021-2022</option>
  </select>
</div>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" ><b>Level</b></label><br>
      <div class="form-outline">
  <select class="form-control" name="level">
    <option value="Level One">Level One</option>
    <option value="Level Two">Level Two</option>
    <option value="Level Three">Level Three</option>
  </select>
</div>
      </div>
    </div>
  </div>



  <!-- Submit button -->
  <button name="update" type="submit" class="btn btn-primary btn-block mb-4">Update Student</button>

</form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>

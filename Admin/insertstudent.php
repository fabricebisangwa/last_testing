<?php
session_start();
require '../connection.php';
if (isset($_POST['add_student'])) {
  
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $sex = $_POST['sex'];
  $depart = $_POST['depart'];
  $academic = $_POST['academic'];
  $level = $_POST['level'];

  if ($academic == "19RP") {
    $acc_Year = "2019-2020";
    $rand = rand(1,44444);
    $rp = sprintf("%05s",$rand);
    $regno = $academic.$rp;
  }
  elseif($academic == "20RP")
  {
    $acc_Year = "2020-2021";
    $rand = rand(1,44444);
    $rp = sprintf("%05s",$rand);
    $regno = $academic.$rp;
  }
  elseif($academic == "21RP")
  {
    $acc_Year = "2021-2022";
    $rand = rand(1,44444);
    $rp = sprintf("%05s",$rand);
    $regno = $academic.$rp; 
  }
  $sql ="INSERT INTO student(regno, fname, lname, sex, depart, academic, level) VALUES (:regno, :fname, :lname, :sex, :depart, :academic, :level)";
  $statement = $connection->prepare($sql);
   $status = $statement->execute([
      ':regno' => $regno, 
      ':fname' => $fname,
      ':lname' => $lname, 
      ':sex' => $sex,
      ':depart' => $depart, 
      ':academic' => $acc_Year,
      ':level' => $level
      ]);
  if($status == 1)
  {
      $_SESSION['regno'] = $regno;
      $_SESSION['fname'] = $fname;
      $_SESSION['lname'] = $lname;
      $_SESSION['depart'] = $depart;
      $_SESSION['sex'] = $sex;
      $_SESSION['academic'] = $acc_Year;
      $_SESSION['level'] = $level;
    header("Location: studentView.php");
  }
  else {
    header("Location: create.php?fail");
  }
  }
 ?>
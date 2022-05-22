     <?php
session_start();
require 'connection.php';
?>
<?php 
$uname = $_POST['username'];
$upass = $_POST['password'];
if(isset($_POST['submit'])) 
{ 
 
  $query ="SELECT * FROM teacher WHERE Username=:uname AND password=:upass";
  $stmt = $connection->prepare($query);
  $stmt->execute([':uname' => $uname,':upass' => $upass]);
  $countRow = $stmt->rowCount();
  if ($countRow > 0) {
       $_SESSION['Teacher']=$_POST['username'];
        header("location:Teacher/");
                }
              else
                {
                  header("location:index.php");
                }                        
 }

 ?>


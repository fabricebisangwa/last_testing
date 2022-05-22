<?php
session_start();
require '../connection.php';
?>
<?php 
$RegNo = $_POST['RegNo'];

if(isset($_POST['login'])) 
{ 
 
  $query ="SELECT * FROM student WHERE regno=:RegNo";
  $stmt = $connection -> prepare($query);
  $stmt->execute([':RegNo' => $RegNo]);
  $countRow = $stmt->rowCount();
  if ($countRow > 0) {
                  $_SESSION['Student']=$_POST['RegNo'];
                  header("location:Marks.php");
                }
              else
                { 
                  header("location:index.php?msg=Wrong student RegNo");
                }
                            
 }

 ?>
<?php
require '../connection.php';
$id = $_GET['id'];
$sql = 'DELETE FROM student WHERE regno=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: /Marking/Admin");
}
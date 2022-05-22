<?php 
session_start();
	session_destroy();
	if ($_SESSION['Student']) {
	header("location:marks.php");
}
 ?>
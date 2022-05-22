<?php 
session_start();
	session_destroy();
	if ($_SESSION['Teacher']) {
	header("location:../index.php");
}
 ?>
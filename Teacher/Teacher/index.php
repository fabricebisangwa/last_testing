<?php
session_start();
if (!isset($_SESSION['Teacher']) or empty($_SESSION['Teacher'])) {
header("location:../index.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Teacher</title>

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                   

                    <!-- Topbar Search -->
                 <h2>Marking </h2>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                      

                      
                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="logout.php" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter" style="font-size: 2rem;">Logout</span>
                            </a>
                           
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['Teacher']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>

<?php

$conn = mysqli_connect("localhost","root","");

mysqli_select_db($conn,'tumba');
 $teacher = $_SESSION['Teacher'];
 $query = "";

 if ($teacher == "Linux") {
    $query="SELECT * FROM student where Linux_marks = 'null'";
     
 }
 elseif($teacher == "Networking")
{
      $query="SELECT * FROM student where Networking = 'null'";
 }
 elseif($teacher == "Math")
{
      $query="SELECT * FROM student where Math = 'null'";
  
}
 elseif($teacher == "Research")
{
      $query="SELECT * FROM student where Researc = 'null'";
   
}
else
{
      echo "<script>window.alert('No Techer Found);</script>";   
}

$data = mysqli_query($conn, $query);

?>

                                        <tr>
                                            <th>Names</th>
                                            <th>Reg Number</th>
                                            <th>Department</th>
                                            <th>Year </th>
                                            <th>Level </th>
                                            <th>Add Marks</th>
                                        </tr>
                                    </thead>
               <?php
             
                while($row = mysqli_fetch_assoc($data))
                {
                    $fname=$row['fname'];
                      $lname=$row['lname'];
                        $depart=$row['depart'];
                          $level=$row['level'];
                            $regno=$row['regno'];
                            $academic=$row['academic'];

?>                                     <tbody>
                                       
                                        <tr>
                                            <td><?php echo $fname; ?> <?php echo $lname; ?></td>
                                            <td><?php echo $regno; ?></td>
                                            <td><?php echo $depart; ?></td>
                                            <td><?php echo $academic; ?></td>
                                            <td><?php echo $level; ?></td>
                                            <td width="320">
                                                <form class="form-inline" action="" method="POST">
    <input type="hidden" name="student_id" value="<?php echo $row['regno']; ?>">
  <input type="Number" name="marks" class="form-control" placeholder="Enter Marks" id="email">
  <button type="submit" name="addmarks" class="btn btn-primary">Add</button>
</form>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
<?php
if (isset($_POST['addmarks'])) {
   $id = $_POST['student_id'];
     $marks = $_POST['marks'];
   if ($marks < 0 || $marks >= 100) {
     echo "<script>window.alert('Number must be btn 0 to 100');</script>";
       echo "<script>window.location='index.php';</script>";
   }
   else
   {
  $query1 = "";
 if ($teacher == "Linux") {
    $query1="UPDATE student SET Linux_marks='$marks' where regno = '$id'";
     
 }
 elseif($teacher == "Networking")
{
      $query1="UPDATE student SET Networking='$marks' where regno = '$id'";
 }
 elseif($teacher == "Math")
{
      $query1="UPDATE student SET Math='$marks' where regno = '$id'";

}
 elseif($teacher == "Research")
{
      $query1="UPDATE student SET Researc='$marks' where regno = '$id'";
   
}
else
{
      echo "<script>window.alert('No Techer Found);</script>";   
}
   $data1 = mysqli_query($conn, $query1);
   if($data1 > 0)
   {
 echo "<script>window.location='index.php';</script>";
   }
   }

}
?> 
                </div>
                <!-- /.container-fluid -->
           </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

  

</body>

</html>
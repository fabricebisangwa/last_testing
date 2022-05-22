<?php
session_start();
if (!isset($_SESSION['Student']) or empty($_SESSION['Student'])) {
header("location:index.php");
}
 ?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
  
    <link href="css/main.css" rel="stylesheet" />
   
    <link href="View/css/sb-admin-2.min.css" rel="stylesheet">
  </head>
  <body>
    <center>
    <div class="s131">
   <div class="container-fluid">

   <!--  // View Marks  -->
 
                        <h1 class="h3 mb-0 text-gray-800">MARKING SCHEME</h1>    
                        <h1 class="h4 mb-4 text-info"><?php echo $_SESSION['Student'];  ?></h1> 
                        <?php
       $stu = $_SESSION['Student'];
       require '../connection.php';
      $query="SELECT * FROM student where regno = :stu";
      $stmt = $connection->prepare($query);
      $stmt->execute([':stu' => $stu]);
      $message=" <div class='row' style='width: 1000px;'>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class='col-xl-12 col-md-6 mb-4'>
                            <div class='card border-left-primary shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-xs font-weight-bold text-primary text-uppercase mb-1'>
                                                FeedBack</div>
                                            <div class='h5 mb-0 font-weight-bold text-warning'>Please Wait For Marks</div>
                                        </div>
                                        <div class='col-auto'>
                                            <i class='fas fa-calendar fa-2x text-gray-300'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div>";
                 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    $linux=$row['Linux_marks'];
                      $networking=$row['Networking'];
                        $math=$row['Math'];
                          $research=$row['Researc'];
                      if ($linux == 'null') {
                        echo $message;
                      }
                      elseif($networking == 'null') {
                        echo $message;
                      }
                      elseif($math == 'null') {
                        echo $message;
                      }
                      elseif($research == 'null') {
                        echo $message;
                      }
                      else
                      {
                        $total  = $linux + $networking + $math + $research;
                        $avg = $total / 4;
                        $decision = "";
                        if ($avg >= 80) {
                          $decision = "First Class";
                         } 
                         elseif($avg >= 70) {
                          $decision = "Second class Upper Division";
                         } 
                         elseif($avg >= 60) {
                          $decision = "Second class Lower Division";
                         } 
                           elseif($avg >= 50) {
                          $decision = "Pass";
                         } 
                          else 
                          {
                             $decision = "Repeat the Year";
                          }

                        echo " <div class='row' style='width: 1000px;'>
                  
                        <!-- Earnings (Monthly) Card Example -->
                        <div class='col-xl-3 col-md-6 mb-4'>
                            <div class='card border-left-primary shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-xs font-weight-bold text-primary text-uppercase mb-1'>
                                                NETWORKING</div>
                                            <div class='h5 mb-0 font-weight-bold text-gray-800'>".$networking."</div>
                                        </div>
                                        <div class='col-auto'>
                                            <i class='fas fa-calendar fa-2x text-gray-300'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class='col-xl-3 col-md-6 mb-4'>
                            <div class='card border-left-success shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-xs font-weight-bold text-success text-uppercase mb-1'>
                                                LINUX</div>
                                            <div class='h5 mb-0 font-weight-bold text-gray-800'>".$linux."</div>
                                        </div>
                                        <div class='col-auto'>
                                            <i class='fas fa-dollar-sign fa-2x text-gray-300'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tasks Card Example -->
                        <div class='col-xl-3 col-md-6 mb-4'>
                            <div class='card border-left-info shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-xs font-weight-bold text-info text-uppercase mb-1'>RESEARCH
                                            </div>
                                           <div class='h5 mb-0 font-weight-bold text-gray-800'>".$research."</div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class='col-xl-3 col-md-6 mb-4'>
                            <div class='card border-left-warning shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-xs font-weight-bold text-warning text-uppercase mb-1'>
                                                MATHEMATICS</div>
                                            <div class='h5 mb-0 font-weight-bold text-gray-800'>".$math."</div>
                                        </div>
                                        <div class='col-auto'>
                                            <i class='fas fa-comments fa-2x text-gray-300'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class='col'>
                          <div class='row' style='width: 800px;'>
                        <div class='col-xl-5 col-md-6 mb-4'>
                            <div class='card border-left-info shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-lg font-weight-bold text-info text-uppercase mb-1'>
                                                TOTAL</div>
                                            <div class='h3 mb-0 font-weight-bold text-gray-800'>".$avg."</div>
                                        </div>
                                        <div class='col-auto'>
                                            <i class='fas fa-comments fa-2x text-gray-300'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <div class='col-xl-7 col-md-6 mb-4'>
                            <div class='card border-left-danger shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-lg font-weight-bold text-warning text-uppercase mb-1'>
                                                DECISION</div>
                                            <div class='h3 mb-0 font-weight-bold text-gray-800'>".$decision."</div>
                                        </div>
                                        <div class='col-auto'>
                                            <i class='fas fa-comments fa-2x text-gray-300'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                       </div>
                    </div>";
                      }

                      }   
                       ?>
                   
</div>
<a href="logout.php" class="badge badge-danger" style="font-size:1.3rem;">Back</a>
    </div>

    </center>
    <script src="js/extention/choices.js"></script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false
      });

    </script>
      <script src="View/vendor/jquery/jquery.min.js"></script>
    <script src="View/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="View/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="View/js/sb-admin-2.min.js"></script>
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

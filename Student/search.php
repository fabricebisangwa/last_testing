<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
   
    <link href="css/main.css" rel="stylesheet" />
    
  </head>
  <body>
    <center>
    <div class="s131">
      <form action="Login.php" method="POST">
        <div class="inner-form" style="width:50%;">
          <div class="input-field first-wrap">
            <input id="search" name="RegNo" type="text" placeholder="Your Reg Number" />
          </div>
        
          <div class="input-field third-wrap">
            <button class="btn-search" type="submit" name="login">SEARCH</button>
          </div>
        </div>
 <?php if (isset($_GET['msg'])) {
          echo "<h5 class='text-danger'>".$_GET['msg']."</h5>";
      } 
     else
     {
        echo "";
     }
      ?>
      </form>
     
     
   <!--  // View Marks  -->



    </div>

    </center>
  
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
</head>
<body background="images/img5.jpg" class="bg">

  <nav>
     <label class="logo">Haider Ali School</label>
        <ul>
           <li><a class="nav_opt" href="index.php">HOME</a></li>
           <li><a class="nav_opt" href="">ABOUT</a></li>
           <li><a class="nav_opt" href="">CONTACT</a></li>
           <li><a class="nav_opt" href="">ADMISSION</a></li>
           
        </ul>
    </nav>


    <center>
        
          <div class="form_des">

               <center class="log_center">
                  Login form
                  <h4>
                        <?php
                           session_start();
                        
                           error_reporting(0);
                          echo $_SESSION['loginMessage'];
                          session_destroy();


                        ?>



                  </h4>

               </center>

                      <form action="login_check.php" method ="POST" class="log_des">

                               <div class="user">

                                     <label class="uname">User name:</label>
                                     <input  type="text" name = "username">
                               </div>

                               <div class="user">

                                    <label class="uname">Password:</label>
                                    <input  type="password" name ="password">
                               </div>

                               <div class="user">
                
                                     <input class="btn btn-primary" type="submit" value="Enter">
                               </div>


                      </form>
            </div>
     </center> 

    <footer class="lodin_footer">
            <h1 class="footer_txt">All @copyright reserved by SHAKIN SHAHRIA </h1>
     </footer>


    
</body>
</html>

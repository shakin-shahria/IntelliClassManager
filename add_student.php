<?php
 session_start();

  if (!isset($_SESSION['username'])) // if if there is no user name the you can't access the this page, you will be directed onto the login.php page
    { 
        header("location:login.php");
    }
 elseif($_SESSION['usertype']=='student') // if the user is student then it would not allow the user to access this page and will sent the user to the login.php
   { 
     header("location:login.php");
   }

?>
<?php

error_reporting(0);
//session_start();
//session_destroy();
if($_SESSION['message'])
 {  
    $message=$_SESSION['message'];
    echo "<script>alert('".$message."');</script>"; 
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    
    <title>Admin-Dashboard</title>
    
    <link rel='stylesheet' type='text/css' media='screen' href='admin.css'>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>



</head>
<body>
    <header class="admin_dashboard_text">
    <a href="">Admin Dashboard</a>

    <div class="Logout_text" >
        <a href="logout.php" class="btn btn-primary">Logout </a>
    </div>

    </header>

    <aside>
       <ul>
        <li><a href="user_response.php">Response</a></li>
        <li><a href="#">Add Teacher</a></li>
        <li><a href="#">View Student</a></li>
        <li><a href="#">View Courses</a></li>
       </ul>


    </aside>
    <div class="content">
       <center> 
           <div class="add_student_form_text_header"><h1> Add Student </h1></div>
     
       <div class="add_student_form">
        <form action="add_student_check.php" method="post">
               <label class="trt" for="name">Userame:</label>
               <input type="text" name="name"><br>

               <label class="trt" for="email">Phone:</label>
               <input type="number" name="phone"><br>

               <label class="trt" for="email">Email:</label>
               <input type="text" name="email"><br>


               <label class="trt" for="password">Usertype:</label>
               <input type="text" name="usertype"><br>
               

               <label class="trt" for="password">Password:</label>
               <input type="text" name="password"><br>

               
               <input class="btm btn-primary" type="submit" id="submit"value="ADD" name="add">
               <!--<button type="submit" name="addstudent" class="btn btn-primary">Submit</button> -->
            </form> 
         </div>



       </div>
       </center>
    </div>

    
    
</body>
</html>
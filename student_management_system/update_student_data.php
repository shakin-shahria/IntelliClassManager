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


<style type="text/css">

 label
 {
    display: inline-block;
    text-align: right;
    width: 100px;
    padding-top: 10px;
    padding-bottom: 10px;

 }

 .div_deg{
  background-color:skyblue;
  width: 400px;
  padding-bottom:70px ;
  padding-top: 70px;


 }


</style>

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
        <li><a href="add_student.php">Add Student</a></li>
        <li><a href="#">Add Teacher</a></li>
        <li><a href="view_student.php">View Student</a></li>
        <li><a href="#">View Courses</a></li>
       </ul>


    </aside>
    <div class="content">
      <center>

     <h1>Update Student Data</h1>
     <div class="div_deg">
        <form>
            <div>
              <label for="id">Username:</label>
              <input type="number" name="username"><br/>
            </div>

            <div>
              <label for="id">Email:</label>
              <input type="number" name="email"><br/>
            </div>

            <div>
              <label for="id">Phone:</label>
              <input type="number" name="phone"><br/>
            </div>

            <div>
              <label for="id">Password:</label>
              <input type="number" name="password"><br/>
            </div>

            <div>
              
              <input class='btn btn-success' type="submit" name="submit" value="Update"><br/>
            </div>

        </form>
        
    </div>

    </div>

    </center?
    
</body>
</html>
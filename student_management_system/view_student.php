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

   //connectiong the database to 'user_response.php'

   $host="localhost";
   $username= "root";
   $password = "";
   $dbname ="schoolproject";

// Create connection
   $conn=mysqli_connect($host,$username,$password,$dbname);
   
       if (!$conn) // Check connection
        {
         die("Connection failed: ".mysqli_connect_error());

        }
   $sql="SELECT *from user where usertype ='student' ";
   $result=mysqli_query($conn,$sql);



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
       <li><a href="user_response.php">Response</li>
        <li><a href="add_student.php">Add Student</a></li>
        <li><a href="#">Add Teacher</a></li>
        <li><a href="#">View Courses</a></li>
       </ul>


    </aside>
    <div class="content">
        <center>

      <h1>Student data</h1>
       <br></br>
       <table border="1px">
      
          <tr>

            <th style="padding: 20px; font-size:15px;">Name</th>
            <th style="padding: 20px; font-size:15px;">Phone</th>
            <th style="padding: 20px; font-size:15px;">Email</th>
            <th style="padding: 20px; font-size:15px;">Password</th>
            <th style="padding: 20px; font-size:15px;">Delete</th>
            <th style="padding: 20px; font-size:15px;">Update</th>
            
          </tr>
        <?php

        while ($row=mysqli_fetch_array($result)) { //This is how we fetech data from database and show it in the website.



        ?>

          <tr>
            
          <th style="padding: 20px; font-size:10px;"><?php echo "{$row['username']}"  ?></th>
          <th style="padding: 20px; font-size:10px;"><?php echo "{$row['phone']}"  ?></th>
          <th style="padding: 20px; font-size:10px;"><?php echo "{$row['email']}"  ?></th>
          <th style="padding: 20px; font-size:10px;"><?php echo "{$row['password']}"  ?></th>
          <th style="padding: 20px; font-size:10px;"><?php echo "<a class='btn btn-danger' onClick=\"javascript: return confirm('Are you sure to DElete this')\" href='delete_student_data.php?student_id={$row['id']}'> Delete </a>"  ?></th> 
          <th style="padding: 20px; font-size:10px;"><?php echo "<a class='btn btn-primary' href='update_student_data.php'> Update</a>"  ?></th> 
          
                      
            


     <?php
        }
     ?>


          </tr>


      </table>
     
      </center>
    </div>

    
    
</body>
</html>
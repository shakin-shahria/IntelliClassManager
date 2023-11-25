<?php
 
 session_start();

   if (!isset($_SESSION['username'])) // if if there is no user name the you can't access the this page, you will be directed onto the login.php page
      {
        header("location:login.php");
      }


  elseif($_SESSION['usertype']=='admin')
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



</head>
<body>
    <header class="admin_dashboard_text">
    <a href="">Student   Dashboard</a>

    <div class="Logout_text" >
        <a href="logout.php" class="btn btn-primary">Logout </a>
    </div>

    </header>

    <aside>
       <ul>
        
        <li><a href="#">My Courses</a></li>
        <li><a href="#">My Result</a></li>
       </ul>


    </aside>
    <div class="content">

     <h1>jkhkjhkj

     </h1>
     <p>
        gjhghjghjgjhghjghjghghjghghghghjgjgyuyfytyryerertdtrdfgxvvbcbnvmnbmjjkhiyuiyuytuytrtyrsrxgfxcvbcb
     </p>

    </div>

    
    
</body>
</html>
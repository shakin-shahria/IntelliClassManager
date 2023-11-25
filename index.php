<?php

    error_reporting(0);
    session_start();
    session_destroy();
    if($_SESSION['message'])
     {  
        $message=$_SESSION['message'];
        echo "<script>alert('".$message."');</script>"; 
      }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student management system</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
    
    
</head>
<body>
    <nav>
     <label class="logo">Haider Ali School</label>
        <ul>
           <li><a class="nav_opt" href="">HOME</a></li>
           <li><a class="nav_opt" href="">ABOUT</a></li>
           <li><a class="nav_opt" href="">CONTACT</a></li>
           <li><a class="nav_opt" href="">ADMISSION</a></li>
           <li><a class="nav_opt" href="login.php">LOGIN</a></li>
        </ul>
    </nav>


    <div class="section1">
        <label class="img1_text">We Teach with care</label>
         <img class="img1" src="images/img1.jpg" alt="img1.png">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="img2" src="images/img2.jpg">
            </div class="col-md-8">
              <h1>Welcome to Haider Ali School</h1>
              <p>
              At Haider Ali School, we're committed to your child's success. 
              Our dedicated team and well-rounded curriculum will 
              nurture their growth, both academically and personally.
              Together, we'll create a positive and inclusive environment 
              where learning is exciting and values matter. Welcome to our school community, 
              where every day is a chance to learn, grow, and thrive.
              </p>

        </div>
    </div>

    <center>
        <h1>Our Teachers</h1>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                 <img class="img3" src="images/img3.jpg">
                 <p>jkkgkjkjhjkhkhhjkhkjhh</p>
            </div>
            <div class="col-md-4">
                 <img class="img3" src="images/img3.jpg">
                 <p>jkkgkjkjhjkhkhhjkhkjhh</p>
            </div>
            <div class="col-md-4">
                 <img class="img3" src="images/img3.jpg">
                 <p>jkkgkjkjhjkhkhhjkhkjhh</p>
            </div>

        </div>

    </div>


    <center>
        <h1>Our coourses</h1>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                 <img class="img4" src="images/img4.jpg">
                 <p>jkkgkjkjhjkhkhhjkhkjhh</p>
            </div>
            <div class="col-md-4">
                 <img class="img4" src="images/img4.jpg">
                 <p>jkkgkjkjhjkhkhhjkhkjhh</p>
            </div>
            <div class="col-md-4">
                 <img class="img4" src="images/img4.jpg">
                 <p>jkkgkjkjhjkhkhhjkhkjhh</p>
            </div>

        </div>

    </div>
    
    <center>
        <h1 class="adm">Contact Us</h1>
    </center>

        <div align = "center" class="admission_form">
            <form action="contact_us_check.php" method="POST">
                   <div class="adm_in">
                    <label class="label_txt"><b> Name:</b></label>
                    <input class="input_des" type="text" placeholder="Enter Name" name="name" required><br>
                  </div>


                  <div class="adm_in">
                    <label class="label_txt"><b>Email:</b></label>
                    <input class="input_des" type="text" placeholder="Email" name="email" required><br>
                  </div>


                  <div class="adm_in">
                    <label class="label_txt"><b>Phone:</b></label>
                    <input class="input_des" type="text" placeholder="Phone" name="phone" required><br>
                  </div>

                  <div class="adm_in">
                    <label class="label_txt"><b>Message:</b></label>
                    <textarea class="msg" name="message" ></textarea>
                  </div>

                  <div class="adm_in">
                    <input class="btm btn-primary" type="submit" id="submit"value="send" name="apply">
                  </div>

            </form>
        </div>

        <footer>
            <h1 class="footer_txt">All @copyright reserved by SHAKIN SHAHRIA </h1>
        </footer>










</body>
</html>

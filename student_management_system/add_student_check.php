<?php
    session_start();
    $host="localhost";
    $user="root";
    $password="";
    $dbname="schoolproject";

    $conn =  mysqli_connect($host,$user,$password,$dbname);
    if (!$conn) 
      {
        die("Connection failed: " . mysqli_connect_error());
      }
     //echo "Connected successfully"; 
     if(isset($_POST['add'])) //if someone clicks the apply button only then we will exicuite this if condition
     {
       
         $name=$_POST['name']; //taking 'name' from the form of index.php
        
         $phone=$_POST['phone']; //taking 'phone' from the form of index.php

         $email=$_POST['email']; //taking 'email' from the form of index.php

         $usertype=$_POST['usertype']; //taking 'usertype' from the form of index.php

         $password=$_POST['password']; //taking 'message' from the form of index.php
         

        $sql="INSERT INTO user(username,phone,email,usertype,password)
                              values('$name','$phone','$email','$usertype','$password')"; // Query for storing this data in the database
                              $result=mysqli_query($conn,$sql);
                              

                              if($result){
                               $_SESSION['message']="Student addes successfully";
                                header("location:add_student.php");
                              //echo "<script>alert('Message Sent Successfully');</script>";
                              //header("location:index.php");
                            }
                              
                              else{
                                echo "Failed attempt";
                                //echo "<script>alert('Message Sent Unsuccessful');</script>";
                             // header("location:index.php");
                              }
     }
    
?>
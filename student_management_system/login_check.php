<?php
 error_reporting(0);
 session_start();
 
 $host="localhost";
 $user="root";
 $password="";
 $db="schoolproject";
 $data = mysqli_connect($host,$user,$password,$db);

 if($data === false)
   {
     die("connection error");
   }

   if($_SERVER["REQUEST_METHOD"]=="POST") //This takes input from the the login.php file with the help of "POST"
     {

        $name = $_POST["username"]; // Takin user name from login.php and storing in $name
        $pass = $_POST["password"]; // Takin user password from login.php and storing in $pass

       $sql= "select * from user where username ='".$name."' AND password='".$pass."' "; // Writting the sql and matching with the database here 'username' and 'password' are the row name in database.
       $result=mysqli_query($data,$sql);
       $row=mysqli_fetch_array($result);

       if($row["usertype"] == "student") // for matching user type wich we created in the database
       {

        $_SESSION['username']=$name;
        $_SESSION['usertype']='student';// only student can access the student.login
        header("location:student.php");
       
       }

      elseif($row["usertype"] == "admin")
       {
          $_SESSION['username']=$name;
          $_SESSION['usertype']='admin';
          header("location:admin.php");
        }
        
     else{
       
        $message="User name and password do not match";
        $_SESSION['loginMessage']=$message;
        header("location:login.php");
       }
    }
 
?>
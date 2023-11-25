<?php

$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$conn=mysqli_connect($host,$user,$password,$db);
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
else
{
   // echo "Connected successfully!";
   if($_GET['student_id'])
   {
    $user_id= $_GET['student_id'];
    $sql ="DELETE from user where id='$user_id'";
    $result=mysqli_query($conn,$sql);
      if($result)
      {
 
        header("location:view_student.php");

      }
   }
}
?>





?>
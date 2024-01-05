<?php
session_start(); // Start or resume a user session.
session_destroy(); // Terminate the user's session (log out).
header("location:login.php"); // Redirect the user to the login page.
?>

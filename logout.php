<?php 
  session_start(); 
  session_unset();  //to clear the session data
  session_destroy(); 
  header("Location: index.php"); 
  exit; 
?> 
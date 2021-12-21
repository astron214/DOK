<?php
   include('db.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select bitadd from login where bitadd = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['bitadd'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:inside.php");
      die();
   }
?>
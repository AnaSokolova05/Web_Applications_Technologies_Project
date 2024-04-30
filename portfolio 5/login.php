<?php


session_start();

include 'connection.php';

if(isset($_POST['subLogin'])){

    $user=$_POST['txtUser'];
    $pass=$_POST['txtPass'];
 
    $query="SELECT * FROM users WHERE username='$user' AND password='$pass'";


    $result= mysqli_query($connection, $query);

   if ($row = mysqli_fetch_assoc($result)) {
   
    echo $_SESSION['userID']=$user;
    header ('location:session.php');
 
   } else {
    
    echo $_SESSION['error']='User not recognised';
    header ('location: session.php');
    
     }
  }
?>
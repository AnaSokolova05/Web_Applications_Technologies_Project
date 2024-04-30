<?php

session_start();


if(!isset($_SESSION['userID'])){
 header ('location: login.html');
}

?> 

<a href="./logout.php">Logout Page</a>
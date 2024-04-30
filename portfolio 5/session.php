
<?php

session_start();

include 'init.php';

if (isset($_SESSION['userID'])) {
    
    echo 'Welcome, ' . $_SESSION['userID'] . '<br />';

} else {
    
    include 'loginform.php';
    echo $_SESSION['error'] = 'User not recogised';
}


?>
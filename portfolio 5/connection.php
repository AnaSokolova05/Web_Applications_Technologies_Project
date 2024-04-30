<?php

//Set up the database access credentials

$hostname = 'stu-db.aet.leedsbeckett.ac.uk';

$username = 'c7325631'; //your standard uni id

$password = 'MyDB08036465'; // the password found on the W: drive

$databaseName = 'c7325631'; //the name of the db you are using on phpMyAdmin

$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");

?>
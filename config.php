<?php
########## MySql details (Replace with yours) #############
$username = "user"; //mysql username
$password = "password"; //mysql password
$hostname = "localhost"; //hostname
$databasename = 'dave'; //databasename

//connect to database
$mysqli = new mysqli($hostname, $username, $password, $databasename);
//("localhost", "user", "password", "dave")
?>
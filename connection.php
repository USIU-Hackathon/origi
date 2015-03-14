<?php
//Create a connection to a database
$hostname="localhost";
$database="reservations";
$username="root";
$password="6I6ysaaen";

$connect=mysql_pconnect($hostname, $username, $password)
or die(mysql_error());
mysql_select_db($database,$connect)
or die("Error: db connection failed");
?>
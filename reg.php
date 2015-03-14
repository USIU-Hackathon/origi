<?php
//Include the database connection file
include("connection.php");
//Check if a person has clicked on submit
if(isset($_POST['submit'])){

//Create variables from each $_POST
$date=$_POST['date'];
$numberofpeople=$_POST['numberofpeople'];
//Create a variable containing the SQL Query
$query="INSERT INTO reservation
(resno,numberofpeople,date)
VALUES
(null,'$numberofpeople','$date')";
//Perform the SQL query on the database.
$result=mysql_query($query);
//If the query failed, display an error.
if(!$result){
echo "Your query failed.".mysql_error();
//The dot separates PHP code and plain text.
} else {
//Display a success message!
echo "Welcome ".$username. 
". You are now registered<br/>";
echo "<a href='login.html'>Click Here to Login</a>";
}
}
?>
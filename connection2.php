<?php
include("connection.php");
if(isset($_POST['submit'])){
	$resno=$_POST['resno'];
	$query="SELECT * FROM reservation WHERE resno='$resno'";
	$result=mysql_query($query);
	$numrows=mysql_num_rows($result);
	if($numrows==1){
		echo "Reservation Found!";
	} else{
		echo "Reservation not Found!";
	}
}
?>
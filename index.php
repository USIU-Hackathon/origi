<html>
<body>
<form action="index.php" method="post">
<!--you can use another action if you'd like-->
<label>Res No: </label><br/>
<input type="text" name="resno"><br>
<input type="submit" name="submit" id="submit" value="Submit"/>
</form>
</body>
</html>
<?php
require('connection.php');
if(isset($_POST['submit'])){
	$resno=$_POST['resno'];
	$query="SELECT * FROM reservation WHERE resno='$resno'";
	$result=mysql_query($query);
	Snumrows=mysql_num_rows($result);
	if($numrows==1){
		echo "Reservation Found!";
	} else{
		echo "Reservation not Found!";
	}
}
?>
	
<?php
 
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];


$date1 = date("Y-m-d");
$todayssDate = str_replace('-', '/', $date1);
if ( $text == "" ) {
    
    $response = "CON What would you like to do? \n";
    $response .= "1. Make reservation \n";
  
	
} else if ( $text == "1" ) {
    $response = "CON How many people will be in attendance? \n";
	$response .= "2. 1-3 \n";
    $response .= "3. 4-6 \n";
	$response .= "4. 7-10 \n";
	
} else if ( $text == "2" ) {

    $response = "CON When would you like to come \n";
	$response .= "5. $todayssDate";
    $response .= 6. date('Y-m-d', strtotime($todayssDate ." +1 days"));
	$response .= "7. date('Y-m-d', strtotime($todayssDate ." +2 days"))";
	$response .= "8. date('Y-m-d', strtotime($todayssDate ." +3 days"))";
    $response .= "9. date('Y-m-d', strtotime($todayssDate ." +4 days"))";
	$response .= "10. date('Y-m-d', strtotime($todayssDate ." +5 days"))";
	$response .= "11. date('Y-m-d', strtotime($todayssDate ." +6 days"))";
} else if ( $text == "3" ) {

    $response = "CON When would you like to come \n";
	$response .= "5. $todayssDate";
    $response .= "6. date('Y-m-d', strtotime($todayssDate ." +1 days"))";
	$response .= "7. date('Y-m-d', strtotime($todayssDate ." +2 days"))";
	$response .= "8. date('Y-m-d', strtotime($todayssDate ." +3 days"))";
    $response .= "9. date('Y-m-d', strtotime($todayssDate ." +4 days"))";
	$response .= "10. date('Y-m-d', strtotime($todayssDate ." +5 days"))";
	$response .= "11. date('Y-m-d', strtotime($todayssDate ." +6 days"))";
} else if ( $text == "4" ) {

    $response = "CON When would you like to come \n";
	$response .= "5. $todayssDate";
    $response .= "6. date('Y-m-d', strtotime($todayssDate ." +1 days"))";
	$response .= "7. date('Y-m-d', strtotime($todayssDate ." +2 days"))";
	$response .= "8. date('Y-m-d', strtotime($todayssDate ." +3 days"))";
    $response .= "9. date('Y-m-d', strtotime($todayssDate ." +4 days"))";
	$response .= "10. date('Y-m-d', strtotime($todayssDate ." +5 days"))";
	$response .= "11. date('Y-m-d', strtotime($todayssDate ." +6 days"))";
} else if ($text == "5"){
	$response = "END You have made a reservation for $todayssDate";
	
} else if ($text == "6"){
	$response = "END You have made a reservation for date('Y-m-d', strtotime($todayssDate ." +1 days"))";
	
} else if ($text == "7"){
	$response = "END You have made a reservation for date('Y-m-d', strtotime($todayssDate ." +2 days"))";
	
}else if ($text == "8"){
	$response = "END You have made a reservation for date('Y-m-d', strtotime($todayssDate ." +3 days"))";
	
}else if ($text == "9"){
	$response = " END You have made a reservation for date('Y-m-d', strtotime($todayssDate ." +4 days"))";
	
}else if ($text == "10"){
	$response = "END You have made a reservation for date('Y-m-d', strtotime($todayssDate ." +5 days"))";
	
}else if ($text == "11"){
	$response = "END You have made a reservation for date('Y-m-d', strtotime($todayssDate ." +6 days"))";
	
}

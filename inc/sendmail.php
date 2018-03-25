<div id="contact">
<?php
$ip = $_POST['ip'];
$httpref = $_POST['httpref'];
$httpagent = $_POST['httpagent'];
$visitor = $_POST['visitor'];
$visitormail = $_POST['visitormail'];
$notes = $_POST['notes'];
$attn = $_POST['attn'];


if (eregi('http:', $notes)) {
die ("Do NOT try that! ! ");
}
if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,".")))
{
echo "<h4>Use Back - Enter valid e-mail</h4>\n";
$badinput = "<h4>Feedback was NOT submitted</h4>\n";
echo $badinput;
die ("Go back! ! ");
}

if(empty($visitor) || empty($visitormail) || empty($notes )) {
echo "<h4>Use Back - fill in all fields</h4>\n";
die ("Use back! ! ");
}

$todayis = date("l, F j, Y, g:i a") ;

$attn = $attn ;
$subject = $attn;

$notes = stripcslashes($notes);

$message = " $todayis [EST] \n
Attention: $attn \n
Message: $notes \n
From: $visitor ($visitormail)\n
Additional Info : IP = $ip \n
Browser Info: $httpagent \n
Referral : $httpref \n
";

$from = "From: $visitormail\r\n";


mail("ngoldingay@gmail.com", $subject, $message, $from);
?>
</div>
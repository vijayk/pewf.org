<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sendemail Script</title>
</head>
<body>

<!-- Reminder: Add the link for the 'next page' (at the bottom) -->
<!-- Reminder: Change 'YourEmail' to Your real email -->

<?php

$ip = $_POST['ip'];
$httpref = $_POST['httpref'];
$httpagent = $_POST['httpagent'];
$visitor = $_POST['visitor'];
$occupation = $_POST['occupation'];
$city = $_POST['city'];
$visitormail = $_POST['visitormail'];
$notes = $_POST['notes'];


if (eregi('http:', $notes)) {
die ("Do NOT try that! ! ");
}
if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,".")))
{
echo "<h2>Use Back - Enter valid e-mail</h2>\n";
$badinput = "<h2>Form was NOT submitted</h2>\n";
echo $badinput;
die ("Go back! ! ");
}

if(empty($visitor) || empty($occupation) || empty($city) || empty($visitormail) || empty($notes )) {
echo "<h2>Use Back - fill in all fields</h2>\n";
die ("Use back! ! ");
}

$todayis = date("l, F j, Y, g:i a") ;

$subject = "PEWF Registration Request from $visitor";

$notes = stripcslashes($notes);

$message = "$todayis \n
From: $visitor ($visitormail)\n
Occupation: $occupation \n
City: $city \n
Message:\n $notes \n";

$from = "From: $visitormail\r\n";


mail("manmit.kumar@pewf.org, contact@pewf.org", $subject, $message, $from);

?>

<p align="center">
Thank You : <?php echo $visitor ?> ( <?php echo $visitormail ?> )
<br /><br />
Your request has been e-mailed to the Society Representative. <br />
The society working committee will get in touch in two working days.
<br />

<br /><br />
<a href="http://www.pewf.org"> Home </a>
</p>

</body>
</html>
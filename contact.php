
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Email Form </title>
</head>
<body>

<form method="post" action="sendeail.php">

<!-- DO NOT change ANY of the php sections -->
<?php
$ipi = getenv("REMOTE_ADDR");
$httprefi = getenv ("HTTP_REFERER");
$httpagenti = getenv ("HTTP_USER_AGENT");
?>

<input type="hidden" name="ip" value="<?php echo $ipi ?>" />
<input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
<input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />


Your Name: <br />
<input type="text" name="visitor" size="35" />
<br />
Your Email:<br />
<input type="text" name="visitormail" size="35" />
<br /> <br />
<br />
Attention:<br />
<select name="attn" size="1">
<option value=" Sales n Billing ">Sales n Billing </option>
<option value=" General Support ">General Support </option>
<option value=" Technical Support ">Technical Support </option>
<option value=" Webmaster ">Webmaster </option>
</select>
<br /><br />
Mail Message:
<br />
<textarea name="notes" rows="4" cols="40"></textarea>
<br />
<input type="submit" value="Send Mail" />
<br />
</form>

</body>
</html>
<a href="contact.php">Contact</a><?php
 /* Contact Page PHP Script */

/* Email Variables */
$emailSubject = 'contact!'; /*Make sure this matches the name of your file*/
$webMaster = 'tiara@tiaramayphotography.com';


/* Data Variables */
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];


$body = <<<EOD
<br><hr><br>
	Name: $name <br>
	Email: $email <br>
	Message: $message <br>
EOD;

	$headers = "From: $email\r\n";
	$headers .= "Content-type: text/html\r\n";
	$success = mail($webMaster, $emailSubject, $body,
	$headers);
	
 

/* Results rendered as HTML */
$theResults = <<<EOD
<html>
<head>
<title>Tiara May Photography Sent Message</title>
<meta http-equiv="refresh" content="5;URL=http://www.tiaramayphotography.com/index.html">
<style type="text/css">
<!--
body {
background: #08b7b9; url(../images/background8.png); /* You can edit this CSS to match your website*/
font-family: Tahoma,sans-serif;
font-size: 20px;
font-style: normal;
line-height: normal;
font-weight: normal;
color: #FFF;
text-decoration: none;
padding-top: 200px;
margin-left: 150px;
width: 800px;
}
-->
</style>
</head>
<div align="center">Thank you for your Interest. Your email will be answered very soon. You will now be returned to Tiara May Photography home page.</div>
</div>
</body>
</html>
EOD;
	
		echo "$theResults";

	
?>
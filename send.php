<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php 
$nombre = $_POST['nombre'];
$business = $_POST['business'];
$telephone = $_POST['telephone'];
$facsimile = $_POST['facsimile'];
$email = $_POST['email'];
$country = $_POST['country'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje .= "This message was sent by " . $nombre . ", by the business " . $business. ", from " . $country. " \r\n";
$mensaje .= "their telephone number is " . $telephone . ", facsimile " . $facsimile. " \r\n";
$mensaje .= "The e-mail is: " . $email . " \r\n";
$mensaje .= "Comments: " . $_POST['comments'] . " \r\n";
$mensaje .= "Send  " . date('d/m/Y', time());

$to = 'harold@axbusstech.com';
$subject = 'Contact from Entrewebneur';

mail($to, $subject, utf8_decode($mensaje), $header);

echo "The Message send successfully";

?>
</body>
</html>
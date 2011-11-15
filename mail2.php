<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>@circuuz</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>
<div id="wrapper">
<div id="container">

<div id="form">
<form action="./" method="POST">
<h1>Samtliga fält måste fyllas i.</h1>
<p>Namn:</p>
<input type="text" name="name" autofocus="autofocus" placeholder="Namn" required/>
<p>E-mail:</p>
<input type="email" name="email" placeholder="E-mail" required />
<p>Meddelande:</p>
<textarea rows="6" cols="22" placeholder="Meddelande" name="message" required></textarea>
<br />
<input type="submit" name="submit" value="Skicka" />
</form>
</div>
</div>
</div>

    <?php

if (isset($_POST["submit"])) {

$name = $_POST["name"];
$email = $_POST["email"];

$message = nl2br($_POST["message"]);
$message = strip_tags($message);

if (strlen($message) <= 0 || strlen($name) <= 0 || strlen($email) <= 0) {

echo "Var vänlig fyll i alla fält";
} else {

$to = "info@ettjavlabilspel.com";
$subject = "ettjavlabilspel.com";
$messageMail = "Skickat av\n" . $name . "\n" . $email . "\n\n" . $message;

$mail = mail($to, $subject, $messageMail);

if($mail) {
echo "Ditt meddelande har skickats!";
} else {
echo "Meddelandet skickades inte p.g.a ett okänt fel.";
}
}

}

?>


</body>
</html>


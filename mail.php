<!DOCTYPE HTML>
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="css/contact.css" type="text/css" rel="stylesheet" title="default" media="all"/>
  </head>
  <body>
 <div id="contactform">
<?
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $to = "info@ettjavlabilspel.com";
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail($to, "Subject: $subject",
  $message, "From: $email" );
  echo "<p id='thank'>Thank you, we'll get back asap!</p>";
  }
else
//if "email" is not filled out, display the form
  {
 
  echo "<table>
  <tr><td>
  <form method='post' action='mail.php'>
  <p>Name</p>
  </tr></td>
  <tr><td>
  <input class='sub' name='subject' type='text' autofocus='autofocus' required/>
  </tr></td>
  <tr><td>
  <p>e-Mail</p>
  </tr></td>
  <tr><td>
  <input class='sub' name='email' type='email' required/>
  </tr></td>
  <tr><td>
  <p>Message</p>
  </tr></td>
  <tr><td>
  <textarea name='message' rows='' cols='' required>
  </textarea>
  </tr></td>
  <tr><td>
  <input id='submit' type='submit' value='Send'/>
  </form>
  </tr></td>
  </table>";
}

?>


   </div>
  </body>
</html>
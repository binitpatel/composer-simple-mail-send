# composer-simple-mail-send
First time registering package into composer

add below code in your test file

$to = "toemail@test.com";
$subject = "This is subject email";

$message = "<b>This is HTML message.</b>";
$message .= "<h1>This is headline email.</h1>";

$header = "From:fromemail@test.com \r\n";
$header .= "Cc:ccemail@test.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";


$SendMailObj = new SendMail();

$SendMailObj->to =$to;
$SendMailObj->subject = $subject;
$SendMailObj->header = $header;
$SendMailObj->message = $message;

echo $SendMailObj->sendemail();
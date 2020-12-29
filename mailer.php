<?php

function mailmessage($message, $to, $subject, $from)
{
	$fromEmail = "<$from>\r\n";
	$headers = 'From: '.$fromEmail;
	$headers .= 'Reply-To: '.$fromEmail; 
	$headers .= 'Return-Path: '.$fromEmail;
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //charset=UTF-8 //charset=iso-8859-1
	$headers .= "X-Mailer: PHPRemoteMailer";
	
	mail($to, $subject, $message, $headers);
}


if(isset($_POST['json']))
{
    $array = json_decode($_POST['json'],true);
    $to = $array['to'];
    $from = $array['from'];
    $subject = $array['subject'];
    $message = $array['message'];
    mailmessage($message, $to, $subject, $from);
    echo "mail sent";
    
    //echo "</br>";
    //echo "$to</br>";
    //echo "$from</br>";
    //echo "$subject</br>";
    //echo "$message</br>";
}
else
{
    echo "no data passed to mail.php";
}

?>

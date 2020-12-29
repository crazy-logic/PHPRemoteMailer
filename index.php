<?php

//array for the stuff to send
$array['message'] = "Hi this is some <b>HMTL</b>";
$array['subject'] = "Testing email";
$array['to'] = "";
$array['from'] = "";

$json = "json=".json_encode($array);

$ch = curl_init('https://pathtoremoteserver/mailer.php');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_ENCODING,"");

header('Content-Type: text/html');
$data = curl_exec($ch);

//may as well echo anything we got back from the mailer script. 
echo $data;

?>

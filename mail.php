<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];


$to = "wayir34572@incoware.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;


$headers = "From: https://n0namr3.github.io/No-Name/" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>

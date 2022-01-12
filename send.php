<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
// $co= $_POST['company'];
$sub= $_POST['subject'];
$message= $_POST['message'];
$to = "xhafin@gmail.com";
$subject = "Mail From Stranfin's website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Subject = " . $sub . "\r\n Message =" . $message;
$headers = "From: no-reply@gmail.com" . "\r\n" .
"CC: ixhafin@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:/#contact");
?>

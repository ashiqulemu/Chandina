<?php

//get data from form  

$name = $_POST['name'];
$phone= $_POST['phone'];
$message= $_POST['message']; 

$to = "ashiqulemu.jpi@gmail.com";

$subject = "Mail From Testing";

$txt = 
  " Name: " . $name . " \r\n ".
  " Phone :" . $phone . " \r\n ".
  " Message :" . $message;

$headers = "From: noreply@codeconia.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

  //redirect
   header("Location:thankyou.html");
?>
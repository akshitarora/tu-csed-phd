<?php 
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['body']))
{
    $name = $_POST['name'];$_SESSION['akshit'] = $name;
    $email = $_POST['email'];
    $bodyinp = $_POST['body'];
    
    $to = "akshit.arora1995@gmail.com, sujata.singla@thapar.edu";
    $subject = 'Contact submitted by '.$name;
    $body = $bodyinp;
    $headers = 'From: '.$email;
    
    if(mail($to,$subject,$body,$headers)) {
    	echo 'Thank you for contacting us. We will revert to you soon.';
                                          }else
echo 'Message not sent. Please contact the developers at akshit [dot] arora [at] gmail [dot] com';
    
} else
echo 'Message not sent. Please contact the developers at akshit [dot] arora [at] gmail [dot] com';
?>
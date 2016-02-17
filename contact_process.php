<?php
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['body']))
{
    $name = $_POST['name'];
    $_SESSION['akshit'] = $name;
    $email = $_POST['email'];
    $bodyinp = $_POST['body'];

    $okay = preg_match(
        '/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $email);
if(!$okay)
    { echo 'E-mail not valid';die();
    };
    $to = "akshit.arora1995@gmail.com";
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

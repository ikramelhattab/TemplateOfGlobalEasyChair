<?php 
if(isset($_POST['submit'])){
    $to = "youssef.youssef1998@hotmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $tel = $_POST['tel'];
    $subject = $_POST['subject'];
    $provincia = $_POST['provincia'];
    $message = $_POST['message'];
    $subject = "Contact";
    $message =" Nom : " . $_POST['first_name'] . "\n\n" . " Prénom : " . $_POST['last_name'] . "\n\n" . " Tél  : " .  $_POST['tel']. "\n\n" . " E-mail  : " . $_POST['email'] . "\n\n" . " subject : " . $_POST['subject'] . "\n\n" . " provincia : " . $_POST['provincia'] . "\n\n" . " Messaggio : " . $_POST['message'] ;
         
    $headers = "From:" . $from;
    if (mail(utf8_decode($to), utf8_decode($subject) ,utf8_decode($message), utf8_decode($headers))."\nContent-Type: text/plain; charset=UTF-8\nContent-Transfer-Encoding: 8bit\n") {
        echo ('success');

    } else {
echo ('erreur');    }
    }
?>
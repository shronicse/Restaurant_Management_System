<?php
if(isset($_POST['submit'])){

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $to="shamsulhudaroni@gmail.com";
    $header="From:".$email;

    if(mail($to,$subject,$message,$header)){
        echo " <h1>Your response  sent successfully !! Thank you .$firstname.$lastname We will Contact with you shortly </h1>";
    }
}

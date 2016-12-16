<?php
if(isset($_POST['submit'])){
    $to = "rose12nikhil@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $company = $_POST['company'];
    $subject = $_POST['subject'];
    $address = $_POST['address'];
    $subject2 = "Copy of your form submission";
    $message = "Name : ".$name."\n"."Company : ".$company."\n"."Address : ".$address."\n"." wrote the following:"."\n".$_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "!!!!!!!!!!!!!!!Mail Senthbh. Thank you " . $_POST['name'] . ", we will contact you shortly.!!!!";
    }
?>

<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "pierre.boulette@live.fr";
    $txt = "Un mail de :".$name.".\n\n";

    mail($mailTo, $subject, $txt);
}


?>
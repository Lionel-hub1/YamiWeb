<?php

if (isset($_POST['submit'])) {
    $name       = $_POST['name'];
    $subject    = $_POST['subject'];
    $mailFrom   = $_POST['mail'];
    $Message    = $_POST['message'];

    $mailTo     =   "ndabagajeanlionel@gmail.com";
    $header     =   "From : ".$mailFrom;
    $text       =   "You have received an email from ".$name."\n\n".$Message;

    mail($mailTo, $subject, $text, $header);

    header("Location: index.php?mailsend");
}
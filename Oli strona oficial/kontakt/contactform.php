<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $mail = $_POST['mail'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];

    $mailTo = "milkovska@o2.pl";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: kontakt.html?mailsend")

}
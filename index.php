<?php
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];

    $mailTo = "thegame10182@yahoo.com";
    $headers = "From: " .$mailFrom;
    $txt = "You have received an e-mail from " .$name.".\n\n".$subject;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
?>
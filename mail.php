<?php

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "بطولة الشطرنج - عضو جديد";

    $formContent = "اسم العضو: $name \n\nرقم الجوال: $phone";

    $recipient = "hadeer.cis@gmail.com";
    $mailHeader = "From: بطولة الشطرنج  \r\n";
    mail($recipient, $subject, $formContent, $mailHeader) or die("Error!");
    header('Location: done.html');
    die();
?>
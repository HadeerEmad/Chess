<?php

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "بطولة الشطرنج - عضو جديد";

    $formContent = "اسم العضو: $name \n\nرقم الجوال: $phone";

    $recipient = "hadeer.cis@gmail.com";
    mail($recipient, $subject, $formContent) or die("Error!");
    header('Location: done.html');

?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="index/follow">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    
    <title>بطولة الشطرنج</title>
    <link rel="shortcut icon" type="image/png" href="images/fav-icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    
    <meta name="theme-color" content="#212121">
    <meta name="msapplication-navbutton-color" content="#212121">
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121">
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<!--===============================
    LOADER
===================================-->

<div class="pre-load">
    <div class="d-flex vh-100 w-100 align-items-center justify-content-center">
        <div>
            <img src="./images/logo.png" alt="كش ملك">
            <img src="images/loader.gif" alt="Loading...">
        </div>
    </div>
</div>


</body>
</html>


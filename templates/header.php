<?php

include_once("helpers/url.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matter of Factories Blog</title>
    <!-- CSS STYLESHEET -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.png" alt="Matter of Factories">
        </a>
        <nav>
            <ul>
                <li><a href="<?= $BASE_URL ?>">Home</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">About</a></li>
                <li><a href="<?= $BASE_URL ?>contact.php">Contact us</a></li>
            </ul>
        </nav>
    </header>

<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= @$pageTitle ?: 'TNT Events Inc.'; ?></title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
    <script src='js/scripts.js'></script>
</head>
<body>
    <header>
        <div class="banner">
            <div class="logo">
                <img src="img/logo_banner.png" alt="Top banner stripes. ">
            </div>
            <div class="stripes">
                <img src="img/banner.png" alt="Top banner stripes. ">
            </div>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="login.php">Registration</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <!-- <button class="button blue">Learn More</button> -->
    </header>

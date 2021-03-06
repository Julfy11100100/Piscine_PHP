<?php

include_once ("config/setup.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>techBeast</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div id="wrapper">
    <?php require "blocks/header.php" ?>
    <main>
        <?php require "blocks/nav.php" ?>
        <?php require "blocks/redactprod2.php" ?>
    </main>
    <?php require "blocks/footer.php" ?>
</div>
<script src="js/script.js"></script>
</body>
</html>
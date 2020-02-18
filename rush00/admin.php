<?php
session_start();
$user = $_GET['user'];
$pass = $_GET['pass'];
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
        <div class="categories">
            <div class="inner">
                <div class="categories__row flex_row">
                    <div class="categories__item flex_row">
                        <div class="categories__image">
                            <div class="categories__image_block">
                                <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-a7e9/k2-_ddf29cd7-153e-4ff7-b77b-fa68656f6f81.v1.jpg?odnWidth=282&odnHeight=282&odnBg=ffffff" alt="Desktop Computers">
                            </div>
                        </div>
                        <div class="categories__description">
                            <h3>Add <i class="db"></i>Products</h3>
                            <div class="row">
                                <a class="categories__btn_green" href="addprod.php">click</a>
                            </div>
                        </div>
                    </div>
                    <div class="categories__item flex_row">
                        <div class="categories__image">
                            <div class="categories__image_block">
                                <img src="https://icon-library.net/images/white-edit-icon/white-edit-icon-1.jpg">
                            </div>
                        </div>
                        <div class="categories__description">
                            <h3>Redact</h3>
                            <div class="row">
                               <a class="categories__btn_green" href="redactprod1.php">click</a>
                            </div>
                        </div>
                    </div>
                    <div class="categories__item flex_row">
                        <div class="categories__image">
                            <div class="categories__image_block">
                                <img src="https://icon-library.net/images/white-edit-icon/white-edit-icon-1.jpg">
                            </div>
                        </div>
                        <div class="categories__description">
                            <h3>Redact <i class="db"></i>Users</h3>
                            <form method="post" action="admin.php">
                                <input type="text" name="Accessories">
                                <input type="submit" class="categories__btn_green" value="click">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require "blocks/footer.php" ?>
</div>
<script src="js/script.js"></script>
</body>
</html>
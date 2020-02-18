<?php

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
            <div class="form form_login">
                <div class="inner">
                    <form method="POST" name="account/login.php" action="account/login.php">
                        <span style="font-family: 'Arial Hebrew'; font-size: 24px;">Login</span>
                        <div class="row">
                            <div class="left-side">
                                Username:
                            </div>
                            <div class="input-block">
                                <input type="text" name="login" value=""/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="left-side">
                                Password:
                            </div>
                            <div class="input-block">
                                <input type="password" name="passwd" value=""/>
                            </div>
                        </div>
                        <div class="row">
                            <input class="categories__btn_green" type="submit" name="submit" value="OK">
                        </div>
                        <div class="row">
                            Change password:<a class="categories__btn_green" href="modify.php">click</a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <?php require "blocks/footer.php" ?>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
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
                <form method="POST" name="admin/addprod.php" action="admin/addprod.php" enctype="multipart/form-data">
                    <span style="font-family: 'Arial Hebrew'; font-size: 24px;">Add Product</span>
                    <div class="row">
                        <div class="left-side">
                            Title:
                        </div>
                        <div class="input-block">
                            <input type="text" name="title" value=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="left-side">
                            Category:
                        </div>
                        <div class="input-block">
                            <select name="category">
                                <option value="PC">PC</option>
                                <option value="Monitors">Monitors</option>
                                <option value="Accessories">Accessories</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="left-side">
                            Price:
                        </div>
                        <div class="input-block">
                            <input type="number" name="price" value=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="left-side">
                            Amount:
                        </div>
                        <div class="input-block">
                            <input type="number" name="amt" value=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="left-side">
                            Image:
                        </div>
                        <div class="input-block">
                            <input type="file" name="img_upload" value=""/>
                        </div>
                    </div>
                    <div class="row">
                        <input class="categories__btn_green" type="submit" name="upload" value="input">
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
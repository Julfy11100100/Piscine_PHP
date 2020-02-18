<?php
    session_start();
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
                                <h3>Personal <i class="db"></i>Computers</h3>
                                <form method="post" action="index.php">
                                    <input type="text" name="PC">
                                    <input type="submit" class="categories__btn_green" value="Shop">
                                </form>
                            </div>
                        </div>
                        <div class="categories__item flex_row">
                            <div class="categories__image">
                                <div class="categories__image_block">
                                    <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-38f1/k2-_a6178df4-e549-48d6-8f9f-9555d5721131.v1.jpg?odnWidth=282&odnHeight=282&odnBg=ffffff">
                                </div>
                            </div>
                            <div class="categories__description">
                                <h3>Monitors</h3>
                                <form method="post" action="index.php">
                                    <input type="text" name="Monitors">
                                    <input type="submit" class="categories__btn_green" value="Shop">
                                </form>
                            </div>
                        </div>
                        <div class="categories__item flex_row">
                            <div class="categories__image">
                                <div class="categories__image_block">
                                    <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-4edb/k2-_e238470d-ced4-4d2e-b60e-fde7b411cc18.v1.jpg?odnWidth=282&odnHeight=282&odnBg=ffffff">
                                </div>
                            </div>
                            <div class="categories__description">
                                <h3>Computer <i class="db"></i>Accessories</h3>
                                <form method="post" action="index.php">
                                    <input type="text" name="Accessories">
                                    <input type="submit" class="categories__btn_green" value="Shop">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featured-products__header-name">
                <div class="inner">
                    <h2><?php if (isset($_POST["PC"])) { 
                        echo "Personal Computer";
                    } elseif (isset($_POST["Monitors"])) {
                        echo "Monitors";
                    } elseif (isset($_POST["Accessories"])) {
                        echo "Computer Accessories";
                    } else {
                        echo "Featured Products";
                    }
                    ?></h2>
                </div>
            </div>
            <?php require "blocks/catalog.php" ?>
        </main>
        <?php require "blocks/footer.php" ?>
    </div>
<script src="js/script.js"></script>
</body>
</html>
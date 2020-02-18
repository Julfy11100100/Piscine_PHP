<?php

    include_once ("config/setup.php");
    session_start();
    if ($_POST["button"] === "Buy Now")
    {
        foreach ($_SESSION["PROD"] as $key => $value)
        {
            if ($_SESSION["PROD"][$key] === $_POST["ProdName"])
                $flag = 1;
        }
        if ($flag !== 1)
            $_SESSION["PROD"][] = $_POST["ProdName"];
        $flag = 0;
    }

    $pdo = connectDB();
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
            <div class="featured-products">
                <div class="featured-products__catalog">
                    <div class="inner">
                        <div class="featured-products__row flex_row">
                            <?php
                            foreach ($_SESSION["PROD"] as $key => $value)
                            {
                                $query = $pdo->prepare("SELECT * FROM " . $DB_NAME. ".prods WHERE title=:tit");
                                $query->execute(array(':tit' => $value));
                                $tab = $query->fetch();
                                if ($tab != null) {
                                    echo '<div class="featured-products__item">
                                            <div class="featured-products__image">
                                                <img src="../imageprod/' . $tab["img"] . '" alt="' . $tab . '">
                                            </div>
                                            <div class="featured-products__description">
                                                <h3>' . $tab["title"] . '</h3>
                                                 <h3>Price: ' . $tab["price"] . '</h3>
                                                <div class="featured-products__info flex_row">
                                                     <form action="basket2.php" name="Buy" method="POST">
                                                         <input type="text" name="title" value="'. $tab["title"] . '" style="display:none">                                                 
                                                         <input  type="submit" name="del" value="Delete" class="featured-products__btn_green">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="row">
                            <a href="<?php if ($_SESSION["loggued_on_user"] !== '' && $_SESSION["loggued_on_user"]) {
                                echo "buy.php";
                            } else {
                                echo "login.php";
                            } ?>"class="featured-products__btn_green" >Заказать</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require "blocks/footer.php" ?>
    </div>
</body>
</html>
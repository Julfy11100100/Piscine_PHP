<?php

include_once ("config/setup.php");
session_start();

$pdo = connectDB();

$summ = 0;
foreach ($_SESSION["PROD"] as $key => $value)
{
    if ( $value !== ""){
        $query = $pdo->prepare("SELECT * FROM " . $DB_NAME. ".prods WHERE title=:tit");
        $query->execute(array(':tit' => $value));
        $tab = $query->fetch();
        if ($tab != null)
        {
            $summ += $tab["price"];
        }
    }
}

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
        <div class="row">
            <div class="featured-products__price">
                <span style=""> Итоговая сумма: <?php echo $summ ?></span>
            </div>
        </div>
    </main>
    <?php require "blocks/footer.php" ?>
</div>
</body>
</html>
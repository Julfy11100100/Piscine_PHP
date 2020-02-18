<?php
    session_start();

    $pdo = connectDB();
    $query = $pdo->query("SELECT * FROM rush00.prods ORDER BY id ASC");

    if (isset($_POST["PC"])) { 
        $var = 'PC';
    } elseif (isset($_POST["Monitors"])) {
        $var = 'Monitors';
    } elseif (isset($_POST["Accessories"])) {
        $var = 'Accessories';
    }
?>
<div class="featured-products">
                <div class="featured-products__catalog">
                    <div class="inner">
                        <div class="featured-products__row flex_row">
                            <?php
                            while ($tab = $query->fetch())
                            {
                                if ($tab["category"] === $var)
                                {
                                    echo '<div class="featured-products__item">
                                            <div class="featured-products__image">
                                                <img src="../imageprod/' . $tab["img"] . '" alt="' . $tab . '">
                                            </div>
                                            <div class="featured-products__description">
                                                <h3>' . $tab["title"] . '</h3>
                                                <div class="featured-products__info flex_row">
                                                    <div class="featured-products__price">' . $tab["price"] . '</div>
                                                    <form action="basket.php" name="Buy" method="POST">
                                                        <input type="text" name="ProdName" value="' . $tab["title"] . '" style="display:none;">
                                                        <input type="submit" name="button" value="Buy Now" href="" class="featured-products__btn_green"/>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
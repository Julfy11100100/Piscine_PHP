<?php

include_once ("../config/setup.php");

$pdo = connectDB();

$query = $pdo->query("SELECT * FROM rush00.prods ORDER BY id ASC");

?>
<div class="featured-products">
                <div class="featured-products__catalog">
                    <div class="inner">
                        <div class="featured-products__row flex_row">
                            <?php
                            while ($tab = $query->fetch())
                            {
                                echo '<div class="featured-products__item">
                                            <div class="featured-products__image">
                                                <img src="../imageprod/' . $tab["img"] . '" alt="' . $tab . '">
                                            </div>
                                            <div class="featured-products__description">
                                                <h3>' . $tab["title"] . '</h3>
                                                <div class="featured-products__info flex_row">
                                                     <form action="../admin/redactprod2.php" name="Buy" method="POST">
                                                         <input type="text" name="title" value="' . $tab["title"] . '" style="display:none">
                                                         Amt: <input type="number" name="amt" value="' . $tab["amt"] .'">
                                                         Price:<input type="number" name="price" value="' .$tab["price"] .'">
                                                         Del:<input type="checkbox" name="del" value="delete">
                                                         <input type="submit" name="button" value="Redact">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
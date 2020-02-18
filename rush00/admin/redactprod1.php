
<?php

include_once ("../config/setup.php");

$pdo = connectDB();

$query = $pdo->query("SELECT * FROM rush00.prods ORDER BY id ASC");?>
</div>
<div class="featured-products">
    <div class="featured-products__catalog">
        <div class="inner">
            <div class="featured-products__row flex_row">
                <?php
                while ($tab = $query->fetch()){
                        echo '<div>
                                 <div>
                                     <img src="../imageprod/' . $tab["img"] . '" alt="' . $tab . '">
                                 </div>
                                 <div>
                                     <h3>' . $tab["title"] . '</h3>
                                     <div>
                                         <form action="redactprod2.php" name="Buy" method="POST">
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

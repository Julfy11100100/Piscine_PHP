<?php

include_once ("../config/setup.php");
$pdo = connectDB();

$query = $pdo->query("SELECT * FROM rush00.prods ORDER BY id ASC");?>
<div>
    <div>
        <?php
            while ($tab = $query->fetch()){
                if (isset($_POST["Category"])) {
                    if ($tab["category"] === $_POST["Category"] && $tab["amt"] > 0) {
                        echo '<div>
                            <div>
                                <img src="../imageprod/' . $tab["img"] . '" alt="' . $tab . '">
                             </div>
                             <div>
                                <h3>' . $tab["title"] . '</h3>
                                <div>' . $tab["price"] . '</div>
                                <div>
                                    <form action="basket.php" name="Buy2" method="POST">
                                        <input type="text" name="title" value="' . $tab["title"] . '" style="display:none">
                                         <input type="submit" name="button" value="Buy">
                                    </form>
                                 </div>
                             </div>
                           </div>';
                    }
                }

            } ?>
    </div>
</div>

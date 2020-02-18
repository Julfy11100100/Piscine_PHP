<?php

include_once ("../config/setup.php");

/*if (($_POST[("title")] === "") || ($_POST["price"] === "")
    || $_POST["amt"] == "" || $_POST["button"] !== "Redact") {
    echo("ERROR\n");
    return (0);
}*/

print_r($_POST);

/*$pdo = connectDB();
if ($pdo)
{
    $query = $pdo->prepare("SELECT * FROM " . $DB_NAME. ".prods WHERE title=:tit");
    $query->execute(array(':tit' => $_POST["title"]));
    $res = $query->fetch();
    if ($res == null)
        echo ("ERROR");
    else
    {
        try {
            $update = $pdo->prepare("UPDATE " . $DB_NAME . ".prods SET price=:ps, amt=:at WHERE title='" .$_POST["title"] . "'");
            $update->execute(array(':ps' => $_POST["price"], ':at' => $_POST["amt"] ));
            header("Location:redactprod1.php");
        }
        catch(PDOException $e) {"CAN`T MODIFY PRICE OR AMT:".$e->getMessage()." Aborting process<br>";}
    }
}*/


?>

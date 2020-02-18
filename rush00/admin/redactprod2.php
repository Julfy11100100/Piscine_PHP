<?php

include_once ("../config/setup.php");

if (($_POST[("title")] === "") || ($_POST["price"] === "")
    || $_POST["amt"] == "" || $_POST["button"] !== "Redact") {
    echo("ERROR\n");
    return (0);
}

$pdo = connectDB();
if ($pdo)
{
    if ($_POST["del"] === "delete")
    {
        $query = $pdo->prepare("DELETE FROM " . $DB_NAME. ".prods WHERE title=:tit");
        $query->execute(array(':tit' => $_POST["title"]));
        if (file_exists("../imageprod/". $_POST["title"]."image"))
            unlink("../imageprod/". $_POST["title"]."image");
        header("Location: ../redactprod1.php");
    }
    else
    {
        $query = $pdo->prepare("SELECT * FROM " . $DB_NAME. ".prods WHERE title=:tit");
        $query->execute(array(':tit' => $_POST["title"]));
        $res = $query->fetch();
        if ($res == null)
        {
            echo ("ERROR");
            header("Location: ../redactprod1.php");
        }
        else
        {
            try {
                $update = $pdo->prepare("UPDATE " . $DB_NAME . ".prods SET price=:ps, amt=:at WHERE title='" .$_POST["title"] . "'");
                $update->execute(array(':ps' => $_POST["price"], ':at' => $_POST["amt"] ));
                header("Location: ../redactprod1.php");
            }
            catch(PDOException $e) {"CAN`T MODIFY PRICE OR AMT:".$e->getMessage()." Aborting process<br>";}
        }
    }
}


?>

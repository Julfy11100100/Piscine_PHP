<?php

include_once ("../config/setup.php");

if (($_POST[("title")] === "") || ($_POST["category"] === "") || ($_POST["price"] === "")
    || $_POST["amt"] == "" || $_POST["img_upload"] === "" || $_POST["upload"] !== "input")
{
    echo ("Empty fields\n");
    header("Refresh: 2; url=../addprod.php");
    return (0);
}

if (!file_exists("../imageprod"))
{
    mkdir("../imageprod");
}

$pdo = connectDB();

if ($pdo)
{
    $query = $pdo->prepare("SELECT id FROM " . $DB_NAME. ".prods WHERE title=:tit");
    $query->execute(array(':tit' => $_POST["title"]));
    $res = $query->fetch();
    if ($res != null)
    {
        echo ("ESTb TaKOY product");
        header("Refresh: 2; url=../addprod.php");
    }
    else
    {
        if (!empty($_FILES['img_upload']['tmp_name']) && substr($_FILES["img_upload"]["type"], 0, 5) === "image")
        {
            $img_name = $_POST["title"]."image";
            move_uploaded_file($_FILES["img_upload"]["tmp_name"],"../imageprod/".$img_name);
            try {
                $add = $pdo->prepare("INSERT INTO " . $DB_NAME . ".prods (title,category,price,img,amt) VALUES (?,?,?,?,?)");
                $add->execute([$_POST["title"], $_POST["category"], $_POST["price"],$img_name, $_POST["amt"]]);
                echo "OK\n";
                header("Refresh: 2; url=../addprod.php");
            }
            catch(PDOException $e) {"CAN`T ADD NEW PROD:".$e->getMessage()." Aborting process<br>";}
        }
    }
}
?>
<?php

include_once ("../config/setup.php");

if (($_POST[("login")] === "") || ($_POST["passwd"] === "") || ($_POST["submit"] !== "OK"))
{
    echo ("ERROR\n");
    return (0);
}

$pdo = connectDB();

if ($pdo)
{
    $query = $pdo->prepare("SELECT id FROM " . $DB_NAME. ".users WHERE login=:log");
    $query->execute(array(':log' => $_POST["login"]));
    $res = $query->fetch();
    if ($res != null)
    {
        echo ("ESTb TaKOY login");
        header("Refresh: 2; url=../register.php");
    }

    else
    {
        try {
            $add = $pdo->prepare("INSERT INTO " . $DB_NAME . ".users (login,pass) VALUES (?,?)");
            $add->execute([$_POST["login"] , hash("haval224,5", $_POST["passwd"])]);
            echo "OK2\n";
            header("Refresh: 2; url=../register.php");
        }
        catch(PDOException $e) {"CAN`T ADD NEW ACC:".$e->getMessage()." Aborting process<br>";}
    }
}
?>
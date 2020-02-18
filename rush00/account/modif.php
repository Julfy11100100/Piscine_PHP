<?php

include_once ("../config/setup.php");

if (($_POST[("login")] === "") || ($_POST["oldpw"] === "") || ($_POST["newpw"] === "")
    ||  ($_POST["submit"] !== "OK") || ($_POST["oldpw"] === $_POST["newpw"]))
{
    echo ("ERROR\n");
    return (0);
}

$pdo = connectDB();

if ($pdo)
{
    $query = $pdo->prepare("SELECT id, pass FROM " . $DB_NAME. ".users WHERE login=:log");
    $query->execute(array(':log' => $_POST["login"]));
    $res = $query->fetch();
    if ($res == null)
        echo ("net TaKOgo logina");
    else
    {
        if ($res["pass"] === hash("haval224,5", $_POST["oldpw"]))
        {
            try {
                $update = $pdo->prepare("UPDATE " . $DB_NAME . ".users SET pass=:ps WHERE login='" .$_POST["login"] . "'");
                $update->execute(array(':ps' => hash("haval224,5", $_POST["newpw"])));
                echo "OK";
            }
            catch(PDOException $e) {"CAN`T MODIFY PASSW:".$e->getMessage()." Aborting process<br>";}
        }
        else
            echo "neverniy old pass";
    }
}
?>
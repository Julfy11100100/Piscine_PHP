<?php

include_once ("../config/setup.php");

session_start();

$pdo = connectDB();

if ($pdo) {
    $query = $pdo->prepare("SELECT id, pass FROM " . $DB_NAME . ".users WHERE login=:log");
    $query->execute(array(':log' => $_POST["login"]));
    $res = $query->fetch();
    if ($res == null)
        echo("net TaKOgo logina");
    else {
        if ($res["pass"] == hash("haval224,5", $_POST["passwd"])) {
            $_SESSION["loggued_on_user"] = $_POST["login"];
            echo("OK\n");
            header("Refresh: 2; url=../index.php");
        } else {
            $_SESSION["loggued_on_user"] = "";
            echo("ERROR\n");
        }
    }
}

?>
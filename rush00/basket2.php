<?php
include_once ("config/setup.php");
session_start();
if ($_POST["del"] === "Delete")
{
    foreach ($_SESSION["PROD"] as $key => $value)
    {
        if ($_SESSION["PROD"][$key] === $_POST["title"])
            unset($_SESSION["PROD"][$key]);
    }
}
header("Location: basket.php");
?>
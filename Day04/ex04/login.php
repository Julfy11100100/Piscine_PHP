<?php
include("auth.php");
session_start();
if (auth($_POST["login"], $_POST["passwd"]))
{
    $_SESSION["loggued_on_user"] = $_POST["login"];
    echo ("SESSION\n");
}
else
{
    $_SESSION["loggued_on_user"] = "";
    echo ("ERROR\n");
}
?>
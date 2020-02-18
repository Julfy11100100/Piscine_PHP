<?php

session_start();
$_SESSION["loggued_on_user"] = "";
foreach ($_SESSION["PROD"] as $key => $value)
{
    unset($_SESSION["PROD"][$key]);
}

header("Location: index.php");

?>

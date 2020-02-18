<?php
    if ($_GET["action"] == "set")
        setcookie($_GET["name"], $_GET["value"], time() + 360);
    elseif ($_GET["action"] == "get" && $_COOKIE[$_GET["name"]])
        echo($_COOKIE[$_GET["name"]]."\n");
    elseif ($_GET["action"] == "del")
        setcookie($_GET["name"], 0, time() -1);
?>
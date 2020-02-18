<?php
if (($_POST[("login")] === "") || ($_POST["passwd"] === "") || ($_POST["submit"] !== "OK"))
{
    echo ("ERROR\n");
    return (0);
}
if (!file_exists("../private"))
{
    mkdir("../private");
    file_put_contents("../private/passwd", NULL);
}
if (file_exists("../private/passwd"))
{
    $tab = unserialize(file_get_contents("../private/passwd"));
    if ($tab[0])
    {
        foreach ($tab as $login)
        {
            if ($login["login"] === $_POST["login"])
            {
                echo ("ERROR\n");
                return (0);
            }
        }
    }
    $tab_put["login"] = $_POST["login"];
    $tab_put["passwd"] = hash("haval224,5", $_POST["passwd"]);
    $tab[] = $tab_put;
    file_put_contents("../private/passwd", serialize($tab));
    header('Location: index.html');
    echo ("OK\n");
}
?>
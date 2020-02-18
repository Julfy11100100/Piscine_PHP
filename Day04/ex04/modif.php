<?php
if (($_POST[("login")] === "") || ($_POST["oldpw"] === "") || ($_POST["newpw"] === "") 
||  ($_POST["submit"] !== "OK") || ($_POST["oldpw"] === $_POST["newpw"]))
{
    echo ("ERROR\n");
    return (0);
}
if (!file_exists("../private/passwd"))
{
    echo ("ERROR\n");
    return (0);
}
$tab = unserialize(file_get_contents("../private/passwd"));
foreach ($tab as $key => $value)
{
    if ($tab[$key]["login"] === $_POST["login"])
    {
        if ($tab[$key]["passwd"] === hash("haval224,5", $_POST["oldpw"]))
        {
            $tab[$key]["passwd"] = hash("haval224,5", $_POST["newpw"]);
            file_put_contents("../private/passwd", serialize($tab));
            header('Location: index.html');
            echo ("OK\n");
            return (0);
        }
        else
        {
            echo ("ERROR\n");
            return (0);
        }
    }
}
echo ("ERROR\n");
return (0);
?>
<?php
function auth($login, $passwd)
{
    if(!file_exists("../private/passwd") || !$login || !$passwd)
        return (FALSE);
    $tab = unserialize(file_get_contents("../private/passwd"));
    foreach ($tab as $key => $value)
    {
        if ($tab[$key]["login"] === $login && $tab[$key]["passwd"] == hash("haval224,5", $passwd))
            return (TRUE);
    }
    return (FALSE);
}
?>
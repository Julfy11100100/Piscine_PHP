#!/usr/bin/php
<?php
if ($argc > 1)
{
    $tab = explode(" ",trim($argv[1]));
    foreach($tab as &$elem)
    {
        $elem = trim($elem);
    }
    array_filter($tab);
    $i = 1;
    while ($tab[$i])
    {
        echo($tab[$i]." ");
        $i++;
    }
    echo ($tab[0]."\n");
}
?>
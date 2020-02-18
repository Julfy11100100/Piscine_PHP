#!/usr/bin/php
<?php
if ($argc == 2)
{
    $buf = explode(" ",trim($argv[1]));
    foreach ($buf as &$elem)
    {
        if (!empty($elem))
        {
            $tab[] = $elem;
        }
    }
    $i = 0;
    while($tab[$i])
    {
        echo($tab[$i]);
        $i++;
        if (!empty($tab[$i]))
            echo(" ");
        else
            echo("\n");
    }
}
?>
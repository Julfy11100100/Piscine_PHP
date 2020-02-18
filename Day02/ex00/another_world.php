#!/usr/bin/php
<?php
if ($argc > 1)
{
    $buf = preg_split('/[\t ]/', $argv[1]);
    foreach ($buf as &$elem)
    {
        if (!empty($elem))
            $tab[] = $elem;
    }
    if (!empty($tab))
    {
        echo ($tab[0]);
        $i = 1;
        while ($tab[$i])
        {
            echo(" ");
            echo($tab[$i]);
            $i++;
        }
        echo("\n");
    }
}
?>
#!/usr/bin/php
<?php
function ft_tabs($str)
{
    $buf = explode(" ",trim($str));
    foreach ($buf as &$elem)
    {
        if (!empty($elem))
        {
            $tab[] = $elem;
        }
    }
    return ($tab);
}

if ($argc > 1)
{
    $i = 1;
    $tab = array();
    while ($i < $argc)
    {
        if (!empty(ft_tabs($argv[$i]))) {
            $tab = array_merge($tab, ft_tabs($argv[$i]));
        }
        $i++;
    }
    sort($tab);
    foreach($tab as &$elem)
        echo($elem."\n");
}
?>
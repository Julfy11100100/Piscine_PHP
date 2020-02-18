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

function ft_strlen($a)
{
    $i = 0;
    while ($a[$i])
        $i++;
    return $i;
}

function cmp($a, $b)
{
    $str = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+-./:;<=>?@[\]^_`{|}~";
    $k = 0;
    while ($a[$k] && $b[$k]) {
        $i = stripos($str, (string)$a[$k]);
        $j = stripos($str, (string)$b[$k]);
        if ($i == $j)
            $k++;
        else {
            return ($i < $j) ? -1 : 1;
        }
    }
    if (ft_strlen($a) == ft_strlen($b))
        return 0;
    else
        return (ft_strlen($a) < ft_strlen($b) ? -1 : 1);
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
    usort($tab, "cmp");
    //sort($tab);
    foreach($tab as &$elem)
        echo($elem."\n");
}
?>
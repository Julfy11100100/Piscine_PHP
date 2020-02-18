#!/usr/bin/php
<?php

if ($argc == 4)
{
    $f = trim($argv[1]);
    $z = trim($argv[2]);
    $s = trim($argv[3]);
    $res = "";

    if ($z == "+")
        $res = $f + $s;
    else if ($z == "-")
        $res = $f - $s;
    else if ($z == "*")
        $res = $f * $s;
    else if ($z == "/")
        $res = $f / $s;
    else if ($z == "%")
        $res = $f % $s;
    else
        return 0;
    echo $res . "\n";
}
else
    echo ("Incorrect Parameters\n");
?>
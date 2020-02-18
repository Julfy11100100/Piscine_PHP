#!/usr/bin/php
<?php

while (1)
{
    echo ("Enter a number: ");
    $line = trim(fgets(STDIN));
    if ($line == null)
    {
        echo ("\n");
        break;
    }
    if (is_numeric($line))
    {
        echo ("The number ".$line);
        if (($line % 2) == 0)
            echo (" is even\n");
        else
            echo (" is odd\n");
    }
    else
        echo ($line . " is not a number\n");
}

?>
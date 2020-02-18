<?php
function ft_is_sort($tab)
{
    $buf_tab = $tab;
    sort($buf_tab);
    $i = 0;
    $len = count($tab) - 1;
    while ($buf_tab[$i])
    {
        if ($buf_tab[$i] != $tab[$i])
        {
            if ($buf_tab[$i] != $tab[$len - $i])
                return (0);
        }
        $i++;
    }
    return (1);
}
?>
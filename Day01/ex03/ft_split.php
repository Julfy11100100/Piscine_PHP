<?php

function ft_split($str)
{
    $buf_tab = explode(" ", $str);
    foreach ($buf_tab as &$elem)
    {
        trim($elem);
        if (!empty($elem))
            $my_buf[] = $elem;
    }
    sort ($my_buf);
    return ($my_buf);
}

?>
#!/usr/bin/php
<?
function ft_is_leap($year)
{
    if (($year % 4) === 0)
    {
        if (($year % 100) === 0)
        {
            if (($year % 400) === 0)
                return 1;
            else
                return 0;
        }
        else
            return 1;
    }
    else
        return 0;
}
function ft_calc_year($col_years)
{
    $i = 1970;
    $days = 0;
    if ($col_years >= 1970)
    {
        while ($i < $col_years)
        {
            $i++;
            $days += (ft_is_leap($i)) ? 366 : 365;
        }
    }
    return ($days);
}
if ($argc != 2)
    return (0);
date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fr_FR');
if ($data = strptime($argv[1], '%A %e %B %Y %H:%M:%S'))
{
    if ($data[tm_year] + 1900 < 1970)
    {
        echo ("Wrong Format\n");
    }
    else
    {
        if (($data[tm_year] + 1900) < 1970)
        {
            echo ("Wrong Format\n");
        }
        else
        {
            $day = ft_calc_year($data[tm_year] + 1900);
            $day -= (ft_is_leap($data[tm_year] + 1900)) ? 1 : 0;
            $sec = ($data[tm_hour] - 1) * 3600 + $data[tm_min] * 60 + $data[tm_sec] + ($day + $data[tm_yday]) * 3600 * 24;
            echo ($sec."\n");
        }
    }
}
else
    echo ("Wrong Format\n");
?>
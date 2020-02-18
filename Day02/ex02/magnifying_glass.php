#!/usr/bin/php
<?
function ft_title($tab)
{
    $line_1 = strstr($tab[0], '"', true);
    $line_2 = strtoupper(strstr($tab[0], '"'));
    return ($line_1.$line_2);
}
function ft_link($tab)
{
    return (strtoupper($tab[0]));
}
function ft_call($tab)
{
    $line = preg_replace_callback("/title=\".*?\"/s", "ft_title", $tab[0]);
    $line = preg_replace_callback("/>.*?</s", "ft_link", $line);
    return ($line);
}

if ($argc < 2)
{
    echo("Error arg\n");
    return (0);
}
if (!file_exists($argv[1]))
{
    echo("File not found\n");
    return (0);
}
if (!($fd = fopen($argv[1], 'r')))
{
    echo("File can`t be open\n");
    return (0);
}
while (!feof($fd))
{
    $line .= fgets($fd);
}
$line = preg_replace_callback("/<a.*\/a>/s", "ft_call", $line);
echo ($line);
if (!(fclose($fd)))
{
    echo("Error close\n");
    return (0);
}
?>
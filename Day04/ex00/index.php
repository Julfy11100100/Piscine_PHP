<?php
session_start();
if ($_GET["submit"] == "OK")
{
    $_SESSION["login"] = $_GET["login"];
    $_SESSION["passwd"] = $_GET["passwd"];
}
function ft_for_log()
{
    if ($_SESSION["login"])
        echo $_SESSION["login"];
}
function ft_for_passwd()
{
    if ($_SESSION["passwd"])
        echo $_SESSION["passwd"];
}
?>
<html><body>
<form name="index.php" method="GET">
    Username: <input type="text" name="login" value="<?php ft_for_log(); ?>" />
    <br />
    Password: <input type="password" name="passwd" value="<?php ft_for_passwd();?>" />
    <input type="submit" name="submit" value="OK" />
</form>
</body></html>
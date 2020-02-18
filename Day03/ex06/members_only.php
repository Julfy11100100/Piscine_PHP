<?php
    $code = base64_encode("zaz:Ilovemylittleponey");
    if ($_SERVER['HTTP_AUTHORIZATION'] == "Basic ".$code)
    {
        header("Content-type: image/png");
        $base64 = base64_encode(file_get_contents("../img/42.png"));
        echo "<html><body>
Hello Zaz<br />
<img src="."'"."data:image/png;base64,".$base64."'>"."
</body></html>"."\n";
    }
    else
    {
        header("WWW-Authenticate: Basic realm=''Member area''");
        header('HTTP/1.0 401 Unauthorized');
        echo "<html><body>That area is accessible for members only</body></html>\n";
    }
?>
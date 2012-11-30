<?php
if (strstr($_SERVER['REQUEST_URI'],'index.php')){
    header('HTTP/1.0 404 Not Found');
    echo "<h1>404 Not Found</h1>";
    echo "The page that you have requested could not be found.";
    exit();
}
?>

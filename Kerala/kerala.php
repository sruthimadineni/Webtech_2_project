<?php
    header("Content-Type: text/xml");
    $feed = file_get_contents("kerala.xml");
    echo $feed;
?>

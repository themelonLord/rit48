<?php
// Set your return content type
header('Content-type: application/xml');

// Website url to open
$daurl = 'http://rochester.craigslist.org/search/?areaID=126&catAbb=sss&query=' . $_GET["search"] . '&sort=rel&format=rss';

// Get that website's content
$handle = fopen($daurl, "r");

// If there is something, read and return
if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
        echo $buffer;
    }
    fclose($handle);
}
?>
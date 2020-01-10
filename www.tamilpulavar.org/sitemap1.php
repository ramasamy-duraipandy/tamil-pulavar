<?php 
//sitemap.php
include_once('connection.php');

$query = "SELECT `hdwrd` FROM `hwrd` WHERE `sno` BETWEEN 40001 AND 80000";

$result = mysql_query($query);

$base_url = "https://tamilpulavar.org/";

header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL; 

echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;

while($row = mysql_fetch_array($result))
{
 echo '<url>' . PHP_EOL;
 echo '<loc>'.$base_url. $row["hdwrd"] .'/</loc>' . PHP_EOL;
 echo '<changefreq>daily</changefreq>' . PHP_EOL;
 echo '</url>' . PHP_EOL;
}

echo '</urlset>' . PHP_EOL;

?>
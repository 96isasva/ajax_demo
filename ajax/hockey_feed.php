<?php

$feed = simplexml_load_file("http://prohockeytalk.nbcsports.com/feed/");

$channel = $feed->channel;
$img = $channel->image;

echo "<h1>" . $channel->title . "</h1>";

echo "<p><a href=\"" . $img->link . "\"><img src=\"" . $img->url . "\" title=\"" . $img->title . "\" /></a></p>\n";

foreach($channel->item as $item){
    
    echo "<div id=\"post\">\n";
    
    echo "<h3>" . $item->title . "</h3>\n";
    $thumbAttr = $item->children('media', true)->thumbnail->attributes();
    echo "<img src=\"" . $thumbAttr['url'] .  "\"/>\n";
    
    echo "<p>" . $item->description . "</p>\n";
    
    echo "<p><a href=\"" . $item->link . "\">Till artikeln</a></p>\n";
    
    echo "</div>\n";
    
}
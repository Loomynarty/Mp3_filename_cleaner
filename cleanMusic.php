<?php
$path = "D:\New Music";
$songsM = glob($path . '\*.mp3');
$songsO = glob($path . '\*.ogg');
$songsA = glob($path . '\*.m4a');

foreach($songsM as $song)
{
    $s = substr($song, 0, strlen($song) - 4);
    $name = preg_replace("/‒/","-",$s);
    $name = preg_replace("/&.+?(?=- )/","",$name);
    $name = preg_replace("/,.+?(?=- )/"," ",$name);
    $name = preg_replace("/\[[^)]+\]/","",$name);
    $name = preg_replace("/\([^)]+\)/","",$name);
    $name = preg_replace("/ft\.[^-]*/","",$name);
    $name = preg_replace("/feat\.[^-]*/","",$name);
    $name = trim($name) . ".mp3"; 
    rename($song, $name);
}
foreach($songsO as $song)
{
    $s = substr($song, 0, strlen($song) - 4);
    $name = preg_replace("/‒/","-",$s);
    $name = preg_replace("/&.+?(?=- )/","",$name);
    $name = preg_replace("/,.+?(?=- )/"," ",$name);
    $name = preg_replace("/\[[^)]+\]/","",$name);
    $name = preg_replace("/\([^)]+\)/","",$name);
    $name = preg_replace("/ft\.[^-]*/","",$name);
    $name = preg_replace("/feat\.[^-]*/","",$name);
    $name = trim($name) . ".ogg"; 
    rename($song, $name);
}
foreach($songsA as $song)
{
    $s = substr($song, 0, strlen($song) - 4);
    $name = preg_replace("/‒/","-",$s);
    $name = preg_replace("/&.+?(?=- )/","",$name);
    $name = preg_replace("/,.+?(?=- )/"," ",$name);
    $name = preg_replace("/\[[^)]+\]/","",$name);
    $name = preg_replace("/\([^)]+\)/","",$name);
    $name = preg_replace("/ft\.[^-]*/","",$name);
    $name = preg_replace("/feat\.[^-]*/","",$name);
    $name = trim($name) . ".m4a"; 
    rename($song, $name);
}
?>
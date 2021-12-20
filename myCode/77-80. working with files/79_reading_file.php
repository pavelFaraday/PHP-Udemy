<?php

/* 
If we need read only 100 characters, we can set second param as 100.
100 - bytes. Each bytes equals character

$content = fread($handle, 100);
echo $content;
*/


$file = "example.txt";

if ($handle = fopen($file, "r")) {
    $content = fread($handle, filesize($file));
    echo $content;

    fclose($handle);
} else {
    echo "The files couldn't be written!";
}

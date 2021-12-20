<?php

$file = "example.txt";

if ($handle = fopen($file, "w")) {
    fwrite($handle, "Now I am writing in .txt file. So, I love PHP!");

    fclose($handle);
} else {
    echo "The files couldn't be written!";
}

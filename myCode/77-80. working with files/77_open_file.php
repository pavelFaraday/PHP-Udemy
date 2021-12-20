<?php

/* 
- 'r'	Open for reading only; place the file pointer at the beginning of the file. 
- 'r+'	Open for reading and writing; place the file pointer at the beginning of the file.
- 'w'	Open for writing only; 
- 'w+'	Open for reading and writing; 


fclose() — Closes an open file pointer

We Need give apache server special permisions !!!

*/

$file = "example.txt";
$handle = fopen($file, "w");
fclose($handle);

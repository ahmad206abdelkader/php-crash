<?php

$file = 'extras/users.txt';

if(file_exists($file)){
   
    // echo readfile($file);
   
    
    $handle = fopen($file, 'r');
    $content = fread($handle, filesize($file));
    fclose(($handle));
echo $contents;
}else{
    $handle =fopen($file, 'w');
    $contents ='Brad' . PHP_EOL  . 'sara' . PHP_EOL . 'mike';
    
    fwrite($handle, $contents);

    fclose($handle);
}
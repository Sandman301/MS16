<?php

require('Function.php');

home();

$file_name = "tekst.txt";

function file_write (){
    $file = fopen('$file_name',"w") or
    die("Ei saanud avada");
    $tekst = "Esimene tekst sisestuseks\n <br>";
    fwrite($file, $tekst);
    $tekst = "Teine tekst sisestuseks\n <br>";
    fwrite($file, $tekst);
    $tekst = "Kolmas tekst sisestuseks\n <br>";
    fwrite($file, $tekst);
    fclose($file);
    echo "Õnnestus!\n <br>";
}

function file_read(){
    $file = fopen ('$file_name',"r") or die("Ei saanud avada");
    echo fread($file, filesize("tekst.txt"));
    fclose($file);
    $content = file_get_contents('tekst.txt');
    echo $content;
    
}


//file_write();

//file_read();

counter();

?>
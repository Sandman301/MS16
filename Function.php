<?php

function greeting($input = "ebamäärast"){
    echo "Tere $input <br>";
}

function home(){
   echo'<meta charset = "UTF-8">';
   echo '<li><a href="index.php">Koju tagasi</a></li>';
}

/*
function time()
{
date_default_timezone_set('YOUR TIMEZONE');
    echo $timestamp = date('H:i:s');
}
*/

function counter(){
    $file_name = "count.txt";
    if (!(file_exists($file_name))){

    $file = fopen('count.txt',"w+") or die("Ei saanud avada");
    $tekst = 1;
    fwrite($file, $tekst);
    $count = file_get_contents('count.txt');
    echo $count;
    fclose($file); 
    }
    else 
    {
    $file = fopen('count.txt',"r+") or die("Ei saanud avada");
    $count = intval(file_get_contents('count.txt'))+1;
    fwrite($file, $count);
    echo $count."   korda";
    fclose($file);
    }
    
}

function getUserIP()
{
    $ip =$_SERVER['REMOTE_ADDR'];
    
    $time = date("H:i:s");
    $visitor = $ip." ".$time."\n";
    $file = fopen('visitor.txt',"a+") or die("Ei saanud avada");
    fwrite($file, $visitor);
        echo "<br> Külastate seda lehte aadressilt ".$ip;
        fclose($file);
    return $ip;
}

?>
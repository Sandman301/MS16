<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="main.css">
  <title>Minu esimene leht</title>
</head>
<body>  
    <h1> Welcome to my homepage and stuff</h1>
<?php
// require_once('mysql.php');
require ('Function.php');
require ('menu.php');

    
greeting("hommikust");

menu($menu_begin,$menu_arr,$menu_end);
/*
connect($conn);
my_query($conn);
my_close($conn);
 */
    

counter();
getUserIP();
?>
</body>
</html>

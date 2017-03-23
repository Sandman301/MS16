<?php

echo'<meta charset = "UTF-8">';
require('Function.php');

home();

$test=
    array('hommik',1,'Tere',10.89,'Klass nr A210','1');

print_r($test);
var_dump($test);


$sum =$test[2]."
".$test[0]."ust";

echo $sum;

$sum = $test[0]." ".$test[2]."ust<br>";

echo $sum;

// stringi tegemine massiiviks
$var = "Esimene, teine, kolmas, neljas";
var_dump($var);

echo $var."<br>";
print_r(explode(" ",$var-3));

// massiivi muutmine stringiks
$var_arr = array('Esimene', ' Teine', ' Kolmas', ' Neljas ');

echo "<br>".implode(";",$var_arr);

// massiivi lisamine
$var_arr_add = $var_arr ;
array_push($var_arr_add,"viise","kuues");

print_r($var_arr);
echo "<br>";

// massiivist kustutamine

$var_arr_decrease = $var_arr;

array_pop($var_arr_decrease);
print_r($var_arr_decrease);

echo "<br>";

// sidumassiivid (associated array)

$var_assoc = array('Inga' => 'Esimene', 'Tuuli' => 'Teine', 'Madis' => 'Kolmas');


//massiivi võtmed

print_r(array_keys($var_assoc));
echo "<br>";

print_r(array_values($var_assoc));
echo "<br>";

// massiivi liikme väljatrükk võtme (id) järgi

echo $var_assoc['Inga'];

// mitmemõõteline massiiv

$esta = "eesti keel";
$mata = "matemaatika";
$kem = "keemia";

$hinded = array(
    "Peeter" => array ("$esta" => 4, "$mata" => 3, "$kem" => 5), 
    
    "Mari"   => array("$esta" => 5, "$mata" => 4, "$kem" => 3),
    
    "Jüri"   => array("$esta" => 3, "$mata" => 5, "$kem" => 4)
    );

echo " Peetri hinne eesta on: ";
echo $hinded['Peeter']['matemaatika']."<br>";

$hinded_id = array_keys($hinded);
for ($i=0; $i<count($hinded); $i++) {
    echo $hinded_id[$i]."<br>";
    foreach($hinded[$hinded_id[$i]] as $aine => $hinne){ echo $aine." : " .$hinne."<br>";}
    
    echo "<br>";
}

$number[0]= 1;
$number[1]= 2;

define('A',"a");
define('B',"b");

$char[A] = "a";
$char[B] = "b";

var_dump($number);
var_dump($char);

?>
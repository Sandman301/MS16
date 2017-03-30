<?php

$kasutaja = "<b> Carlo Randar Aavekukk </b>";


$menu_begin= '<div>'.$kasutaja;

$menu_arr = array('Masiivid','Andmebaas','File','Hint','Methods','mysql','data_insert');

$menu_end='</div>';

function menu($begin,$body,$end) {
    echo $begin;
    for ($i = 0; $i < count($body); $i++)
    {
        echo '<li><a 
        href="'.$body[$i].'.php">'.$body[$i].'</a></li>';
    }
    echo $end;
}
?>
<?php
declare(strict_types=1);

function sortPostsByDate(array $a, array $b){
    $format = 'Y-m-d'; //The format used in the $posts array
    $aDate = date($format, strtotime($a['date'])); //Create a for $a & $b to compare
    $bDate = date($format, strtotime($b['date']));

    return $aDate > $bDate; //Sort descending
}

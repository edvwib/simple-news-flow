<?php
declare(strict_types=1);

usort($posts, 'sortPostsByDate');

function sortPostsByDate(array $a, array $b){
    $format = 'Y-m-d'; //The format used in the $posts array
    //var        create date object from format and date
    $atmp = DateTime::createFromFormat($format, $a['date']);
    $btmp = DateTime::createFromFormat($format, $b['date']);

    return $atmp < $btmp; //Sort descending
}

<?php
//Create a simple 'birthday countdown' script, the script counts the number of days left until the person’s birthday. Your script should determine the number of days based on the current date.

function daysCounter(string $date)
{
    $to_date = strtotime($date);
    $today = strtotime(date('d-m-Y'));
    $day_diff = $to_date - $today;
    echo floor($day_diff/(60*60*24))." day to birthday left";
}




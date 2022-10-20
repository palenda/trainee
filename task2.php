<?php
//Create a simple 'birthday countdown' script, the script counts the number of days left until the person’s birthday. Your script should determine the number of days based on the current date.

function daysCounter(string $date)
{
    $today = strtotime(date('d-m-Y'));
    $birth = strtotime($date);
    $birthday = date_create(date("Y", $today) . "-" . date("m", $birth) . "-" . date("d", $birth));
    $difference = date_diff(date_create(date("d-m-Y", $today)), $birthday);
    echo $difference->format("%R%a days");
}




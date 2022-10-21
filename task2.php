<?php
//Create a simple 'birthday countdown' script, the script counts the number of days left until the person’s birthday. Your script should determine the number of days based on the current date.

function Counter($birthday)
{
    $parts = explode('-', $birthday, 2);
    $birth_date = new DateTime(date('Y').'-'.$parts[1].'00:00:00');
    $today = new DateTime('midnight today');
    if ($birth_date < $today)
    {
        $birth_date->modify("+1 Year");
    }

    $diff = $birth_date->diff($today);

    if($diff->days > 0)
    {
        echo "There are ".$diff->days." remaining until your birthday";
    } else {
        echo "Happy birthday!";
    }
}

Counter("2001-10-19");


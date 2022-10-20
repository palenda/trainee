<?php
//Given a string where words are separated by any of the '_', '-', ' ' characters. Write a function that converts such strings to single studly caps case words and removes extra spaces on both sides.

function strings(string $input)
{
    $stringArray = array();
    for($i = 0; $i < strlen($input); $i++)
    {
        $stringArray[$i] = $input[$i];
    }

    for($i = 0; $i < strlen($input); $i++) {
        if($stringArray[$i] == ' ' || $stringArray[$i] == '-' || $stringArray[$i] == '_')
        {
            unset($stringArray[$i]);
            if(ctype_lower($stringArray[$i + 1]))
            {
                $stringArray[$i + 1] = strtoupper($stringArray[$i + 1]);
            }
        }
        else echo $stringArray[$i];
    }

}



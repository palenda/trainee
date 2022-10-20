<?php
//Given a string with a url address. Write a function to check if this string is a valid url address using regular expressions.

function validateURL(string $URL) {
    if(preg_match('%^(?:(?:https?|ftp)://)(?:\S+(?::\S*)?@|\d{1,3}(?:\.\d{1,3}){3}|(?:(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)(?:\.(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)*(?:\.[a-z\x{00a1}-\x{ffff}]{2,6}))(?::\d+)?(?:\S*)?$%iu', $URL)){
        echo 'Matched';
    } else{
        echo "Not matched";
    }
}

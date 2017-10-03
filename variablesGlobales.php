<?php

function Define123()
{
    global $a;
    $a="123";
}

$a = "abx";
echo $a;
Define123();
echo "\n" . $a;



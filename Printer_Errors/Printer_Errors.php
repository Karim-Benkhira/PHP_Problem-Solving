<?php

function printerError($s) {
    $length = strlen($s);

    $valid_char = range('a','m');

    $error = 0;
    foreach(str_split($s) as $char)
    {
        if(!in_array($char,$valid_char))
            $error++;
    }

    return "$error/$length";
}

echo printerError("aaaxbbbbyyhwawiwjjjwwm")."<br>";
echo printerError("aaabbbbhaijjjm")."<br>";

?>
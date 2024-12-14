<?php
function getMiddle($text) {

    $length = strlen($text);

    if($length % 2 == 0)
        $mid = substr($text,($length / 2 ) - 1 , 2 );
    else 
        $mid = substr($text,($length / 2),1);

    return $mid;
}

echo getMiddle("karimm");

?>
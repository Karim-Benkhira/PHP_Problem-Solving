<?php

function duplicate_encode($word){
	
    $lowercase = strtolower($word);

    $coutwords = count_chars($lowercase,1);

    $result = '';

    foreach(str_split($lowercase) as $char)
    {
        if($coutwords[ord($char)] == 1)
            $result = $result . "(";
        else
            $result = $result . ")";
    }

    return $result;

}

echo duplicate_encode('din'). "<br>";
echo duplicate_encode('recede'). "<br>";
echo duplicate_encode('Success'). "<br>";
echo duplicate_encode('(( @');

?>
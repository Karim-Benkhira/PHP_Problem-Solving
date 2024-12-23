<?php
function generateHashtag($str) {
    $arrray = array_filter(explode(" ", trim($str)));
   
    $capitalizedWords = array_map('ucfirst', $arrray);
   
    $finalString = "#" . implode("", $capitalizedWords);
    if (strlen($finalString) > 140 || strlen($finalString) == 1) {
        return false;
    }
    return $finalString;
}
   
echo generateHashtag("Hello there thanks for trying my Kata");
echo "<br>";
echo generateHashtag("    Hello     World   ");
echo "<br>";
echo generateHashtag("");
?>
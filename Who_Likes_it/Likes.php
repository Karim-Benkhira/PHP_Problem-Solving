<?php

function likes(array $names): string
{
    $count = count($names);

    switch ($count) {
        case 0:
            return "no one likes this";
        case 1:
            return "{$names[0]} likes this";
        case 2:
            return "{$names[0]} and {$names[1]} like this";
        case 3:
            return "{$names[0]}, {$names[1]} and {$names[2]} like this";
        default:
            $others = $count - 2;
            return "{$names[0]}, {$names[1]} and {$others} others like this";
    }
}



echo likes([] ). "<br>";
echo likes(["Peter"]). "<br>";
echo likes(["Jacob", "Alex"]). "<br>";
echo likes(["Max", "John", "Mark"]). "<br>";
echo likes(["Alex", "Jacob", "Mark", "Max"]). "<br>";


?>
<?php
function isValidIP(string $str): bool
{
    $array = explode('.',$str);

    if(count($array) != 4)
    {
        return false;
    }
foreach($array as $value)
{
    if(!ctype_digit($value))
    {
        return false;
    }
    $num = (int)$value;

    if($num < 0 || $num > 255)
    {
        return false;
    }

    if($value[0] == '0' && strlen($value) > 1)
    {
        return false;
    }
}

return true;
}

$validIPs = '1.2.3.4';
$invalidIPs = '123.045.067.089';

echo isValidIP($validIPs) .'<br>';
echo isValidIP($invalidIPs);
?>
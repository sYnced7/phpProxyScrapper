<?php
$content = generateRandomString();
$handle = fopen($content, 'w') or die('Cannot open file:  '.$content); //implicitly creates file

echo "Your key is: " . $content . " Past it on the box of the program";


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
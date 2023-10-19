<?php
function encryptString($string, $key) {
    $result = '';
    for($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
        $keyChar = $key[$i % strlen($key)];
        $result .= chr(ord($char) + ord($keyChar));
    }
    return base64_encode($result);
}

// Example usage
$stringToEncrypt = "Hello, World!";
$key = "mySecretKey";
$encryptedString = encryptString($stringToEncrypt, $key);
echo $encryptedString;
?>

<?
$method = 'aes256';
$str = 'пароль';
$key = 'ключ';
 
$crypted = openssl_encrypt($str, $method, $key);
$decript = openssl_decrypt ($crypted, $method, $key);
 
echo $crypted ,"</br></br>", $decript;

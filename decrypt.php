<?php
// Paste the Data Here
$encrypted = '';

// Password Here
$password = '';

// Encryption Method Here, eg 'aes-256-cbc'
$method = '';

// The name of the file you wish to save out, including extension, eg 'results.csv'
$filename = '';



// Let the PHP do its magic
$decrypted = openssl_decrypt(base64_decode($encrypted), $method, $password, OPENSSL_RAW_DATA);
file_put_contents($filename,$decrypted);
 ?>

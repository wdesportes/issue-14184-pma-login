<?php
$isSecure = false;
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $isSecure = true;
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
    $isSecure = true;
}



session_name("phpMyAdmin");
session_set_cookie_params ( 7200 , '/', $_SERVER['HTTP_HOST'], $isSecure, true );
session_start();

//print_r($_SESSION);
//print_r($_SERVER);
echo 'HTTP_HOST: '.$_SERVER['HTTP_HOST'].', SECURE: ';
echo ($isSecure) ? 'oui': 'non';
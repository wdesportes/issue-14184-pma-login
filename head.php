<?php
$secure = (stripos($_SERVER['SERVER_PROTOCOL'],'https') === true );
if(isset($_SERVER['REMOTE_HOST'])){//check
    $ip = $_SERVER['REMOTE_HOST'];
}else{
    $ip = $_SERVER['REMOTE_ADDR'];//else assign the real IP/
}


session_name("phpMyAdmin");
session_set_cookie_params ( 7200 , '/', $ip, $secure, true );
session_start();


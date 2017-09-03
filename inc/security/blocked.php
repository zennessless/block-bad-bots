<?php

include 'bad.ip.addresses.php';
include 'bad.bots.list.php';

if (in_array ($_SERVER['REMOTE_ADDR'], $bad_ips) || in_array ($_SERVER['HTTP_USER_AGENT'], $bad_bots)) {
   header("location: https://www.google.com/404");
   exit();
}

?>

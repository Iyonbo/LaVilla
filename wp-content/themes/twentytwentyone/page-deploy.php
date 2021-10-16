<?php

$salida = shell_exec('cd /var/www/html');
$deploy = shell_exec('sudo git pull origin develop');
echo "<pre>$deploy</pre>";
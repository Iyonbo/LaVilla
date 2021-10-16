<?php
/**
 * The template for displaying all single posts
 */

echo "Deploy Test";

if(function_exists('exec')) {
    echo "exec is enabled";
}else{
    echo "No esta";
}
return;

function execPrint($command) {
    $result = array();
    exec($command, $result);
    print("<pre>");
    foreach ($result as $line) {
        print($line . "\n");
    }
    print("</pre>");
}
// Print the exec output inside of a pre element
execPrint("cd /var/www/html");
execPrint("sudo git pull origin develop");
execPrint("sudo git status");
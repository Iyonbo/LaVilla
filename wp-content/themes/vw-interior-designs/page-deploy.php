<?php
/**
 * The template for displaying all single posts
 */

echo "Deploy Test\n";

// Use in the “Post-Receive URLs” section of your GitHub repo.

if ( $_POST['payload'] ) {
    echo shell_exec( 'cd /var/www/html/ && sudo git reset --hard && sudo git pull origin develop' );
}

?>hi
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

echo "Deploy";
$salida = shell_exec('cd /var/www/html');
$deploy = shell_exec('sudo git pull origin develop');
echo "<pre>$deploy</pre>";
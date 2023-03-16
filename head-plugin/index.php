<?php 

/* 
plugin Name: head-plugin
description: adding code to html head tag
*/

add_action('wp_head', 'add_to_head' );

function add_to_head() {

    echo "<script> alert('this the head of the site') </script>";
}
<?php
/**
 * plugin name: custom_style
 * plugin desceraption:customize style with css rule to the web site
 * author:Youssef Ehab
 */

/**add customize action */
add_action ('wp_head','YPY_add_custom_style');

function YPY_add_custom_style()
{
    /**this echo action was for php veriable but it doesn't work */
    $css_url = plugins_url('css/stylesheet.css',__file__);
    echo "<link rel='stylesheet' href='{$css_url}'>";

};
?>

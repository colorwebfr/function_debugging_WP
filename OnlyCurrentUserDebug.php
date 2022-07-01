<?php
//Debug WP kevin
function setDebugOnlyDev($intDev, $globalVar1, $needGlobaleVar, $forParseInPrintR)
{
    if (get_current_user_id() == $intDev)
    {
        global $globalVar1;
        $needGlobaleVar;
        echo '<pre>';
        print_r($forParseInPrintR);    
        echo '</pre>';        
    }
}
setDebugOnlyDev(3, $post, $metas = get_post_meta($post->ID), $metas['modele_de_la_realisation'][0]);
//how using this function for WP
// setDebugOnlyDev('int user find with echo get_current_user_id', 'global var or $false exemple : $post', 'var for array where looking for exemple: $metas', 'what you search in print_r exemple: $metas['modele_de_la_realisation'][0]');
?>

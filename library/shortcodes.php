<?php

/**
 * Wheel Links
 */
add_shortcode('fcbc_wheel_links', function(){
    ob_start();
    get_template_part('template-parts/wheel', 'links');
    $html = ob_get_contents();
    ob_end_clean();

    return $html;
});
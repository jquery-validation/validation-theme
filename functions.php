<?php
function scripts() {
    echo '<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>' . "\n";
    echo '<script src="' . get_stylesheet_directory_uri() . '/anchorify.min.js"></script>' . "\n";
    echo '<script src="' . get_stylesheet_directory_uri() . '/api-demo.js"></script>' . "\n";
}
add_action( 'wp_footer', 'scripts' );
?>
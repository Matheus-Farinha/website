<?php 

//include
require get_template_directory().'/include/setup.php';

//hooks
add_action("wp_enqueue_scripts", "mf_theme_styles");
add_action("after_setup_theme", "mf_after_setup");
add_action("widgets_init", "mf_widgets");




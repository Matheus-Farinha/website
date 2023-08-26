<?php 

/*bugado neste primeiro trecho*/
function mf_theme_styles() {
    wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/assets/css/bootstrap.min.css');

    wp_enqueue_style('template_css', get_template_directory_uri().'/assets/css/template.css');

    wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.min.js');

    wp_enqueue_script('script_js', get_template_directory_uri().'/assets/js/script.js');
}

function mf_after_setup() {
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Menu');
    register_nav_menu('top','Menu Superior');
}

function mf_widgets() {
    register_sidebar(array(
        'name' => 'Sidebar_projetos',
        'id' => 'mf_sidebar',
        'description' => 'Sidebar feito para adicionar imagens do projeto',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => ''
    ));
}



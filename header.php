<?php
$name = "Sobre";
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="top_header">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="menu">
                        <?php 
                        if(has_nav_menu('top')) {
                            wp_nav_menu(array(
                                'theme_location' => 'top',
                                'container' => false,
                                'fallback_cb' => false,
                                'menu_class' => 'navbar-nav'
                            ));
                        }
                        ?>
                    </div>
                </div>
            </nav>
        </div>

        <div class="main_header">
            <div class="container-fluid">
                <div class="logo">
                    <?php 
                    if(has_custom_logo()) {
                        the_custom_logo();
                    }
                    ?>
                </div>
                <div class="main_nav">
                    <div class="main_nav_border">
                        <?php 
                            if(has_nav_menu('primary')) {
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'container' => false,
                                    'fallback_cb' => false,
                                    'menu_class' => 'nav'
                                ));
                            }
                        ?>
                        <div class="search_area">
                            <?php get_search_form(); ?>
                            
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-auto mr-auto">
                                <div class="titulo">
                                    <h1>
                                    <?php echo (wp_title('', false) != '') ? wp_title('', false) : 'Usinagem'; ?>
                                    </h1>
                                </div>
                            </div>
                            
                            <div class="col-auto socialarea"> 
                                <div class="wpp_area">
                                    <div class="icon">
                                        <a href="https://wa.me/5512997224040" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wpp.png" />
                                            <p class="contact">
                                                Contato : +55 (12) 99722-4040
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </header>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

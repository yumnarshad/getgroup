<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container-fluid" style="    border-bottom: 2px solid #6490d4;
    background: aliceblue;">
    <div id="nav">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt=""/></a>
                </div>
                
                
                <?php
                wp_nav_menu(array(
                    'menu'           => 'primary',
                    'theme_location' => 'primary',
                    'depth'          => 2,
                    'container'      => 'div',
                    'menu_class'     => 'nav',
                    'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'         => new WP_Bootstrap_Navwalker(),
                ));
                ?>
            </div><!-- /.container-fluid -->
        </nav>
    </div><!-- #nav -->
</div>

<div class="container">

<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Carrby - Agency Template">
        <meta name="author" content="">

        <!-- Page Title -->
        <title>Carrby - Agency Template</title>

        <!-- Favicon and Touch Icons -->
        <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" rel="shortcut icon" type="image/png">

        <!-- Lead Style -->
        <?php
        wp_head();
        ?>
    </head>

    <body>
    
        <!-- Start Header -->
        <header id="header" class="header">
            <div class="navigation">
                <div class="container">
                    <nav id="flexmenu">
                        <div class="logo">

                            <?php if (get_field('site_logo','options')) : ?>
                                <a href="/">
                                    <img src="<?php echo get_field('site_logo','options')['url']; ?>" />
                                </a>
                            <?php endif; ?>

                        </div>
                            <?php 
                            wp_nav_menu( array(
                                'theme_location'  => '',
                                'menu'            => '', 
                                'container'       => 'div', 
                                'container_class' => 'nav-inner', 
                                'container_id'    => '',
                                'menu_class'      => 'main-menu', 
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => '',
                               
                                
                            ) );
                            ?>
                            
                    </nav>
                </div>
            </div>
        </header>
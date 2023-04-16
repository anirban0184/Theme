<!DOCTYPE html>
<html lang="<?php language_attributes();?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body class='' <?php body_class(); ?>>

<header>
    <div class="container">
        <div class="row <?php echo get_theme_mod('menu_position')?>" id="header">
            <div class="col-4">
                <a href="<?php echo get_home_url();?>">
                <img src="<?php echo get_theme_mod('anirban_logo') ?>" alt="">
                </a>
            </div>
            <div class="col-8">
                <?php wp_nav_menu( array('theme_location' => 'primary_header', 'menu_id'=> 'nav') ); ?>
            </div>
        </div>
    </div>
</header>
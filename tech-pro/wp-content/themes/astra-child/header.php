<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <h1><a href="./accueil/"><img src="http://localhost/tech-pro/wp-content/uploads/2023/01/logo-tech.png.png" alt="images/LOGO FINAL.png" /></a> </h1>
    
    <nav id="navigation">
   <?php wp_nav_menu(array('theme_location' => 'main')); ?>
</nav>
</header>
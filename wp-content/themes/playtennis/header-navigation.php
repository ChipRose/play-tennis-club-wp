<!doctype html>
<html class="page" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="icon" href="favicon.ico" />
  <title>Играй в теннис</title>
  <?php wp_head(); ?>
</head>

<body class=" body">
  <header class="header">
    <div class="wrapper header__wrapper">
      <?php the_custom_logo(); ?>
      <nav class="menu-primary-container">
        <button class="burger"><span class="visually-hidden">Меню</span></button>
        <?php wp_nav_menu(array(
        'theme_location'=>'top',
        'container'=>'null',
        'menu-class'=>'menu',
        'menu_id'=>'menu'
      )); ?>
      </nav>
    </div>
  </header>

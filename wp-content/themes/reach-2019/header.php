<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php wp_title('|', true, 'right'); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action('before'); ?>





<!-- <section class="navigation">
  <div class="nav-container">
    <div class="brand">
        <a class="navbar-brand js-scroll-trigger" href="<?php// echo home_url(); ?>"><img class="large-img" src="<?php// the_field('site_logo', 'option'); ?>" style=""/></a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
      <?php /* wp_nav_menu(
        array(
          'theme_location' => 'primary',
          'menu_id' => 'main-menu',
          'depth' => 2,
          'container' => 'ul',
          'menu_class'=> 'nav-list',
          // 'walker' => new reach_walker()
        )
      );*/ ?>
    </nav>
  </div>
</section> -->


<header id="masthead" class="site-header" role="banner"></header>

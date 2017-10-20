<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Jabali Global
 * @since 0.1
 */
?><!DOCTYPE html>
<html lang="en">
<head>
  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="keywords" content="global, template, html, sass, jquery">

  <?php wp_head(); ?>
  <style type="text/css">
    a{
      text-decoration: none;
    }
  </style>
</head>
<body>

<!-- notification for small viewports and landscape oriented smartphones -->
<div class="device-notification">
  <a class="device-notification--logo" href="<?php echo get_option('home'); ?>">
    <?php
// Display the Custom Logo
the_custom_logo();

// No Custom Logo, just display the site's name
if (!has_custom_logo()) {
    ?>
    <h1><?php bloginfo('name'); ?></h1>
    <?php
}
?>
  </a>
  <p class="device-notification--message">Global has so much to offer that we must request you orient your device to portrait or find a larger screen. You won't be disappointed.</p>
</div>

<div class="perspective effect-rotate-left">
  <div class="container"><div class="outer-nav--return"></div>
    <div id="viewport" class="l-viewport">
      <div class="l-wrapper">
        <header class="header">
          <a class="header--logo" href="<?php echo get_option('home'); ?>">
            <?php
// Display the Custom Logo
the_custom_logo();

// No Custom Logo, just display the site's name
if (!has_custom_logo()) {
    ?>
    <h1><?php bloginfo('name'); ?></h1>
    <?php
}
?>
          </a>
          <button class="header--cta cta">Hire Us</button>
          <div class="header--nav-toggle">
            <span></span>
          </div>
        </header>
        <nav class="l-side-nav">
          <ul class="side-nav">
            <li class="is-active"><a class="" href="<?php echo get_option('home'); ?>"><span>Home</span></a></li>
            <li class="is-active"><a class="" href="<?php echo get_option('home'); ?>/portfolio"><span>Works</span></a></li>
            <li class="is-active"><a class="" href="<?php echo get_option('home'); ?>/about"><span>About</span></a></li>
            <li class="is-active"><a class="" href="<?php echo get_option('home'); ?>/find"><span>Find Me</span></a></li>
            <li class="is-active"><a class="" href="<?php echo get_option('home'); ?>/contact"><span>Hire me</span></a></li>
          </ul>
        </nav>

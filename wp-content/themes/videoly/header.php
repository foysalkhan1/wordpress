<?php
/**
 * Header file
 *
 * @package videoly
 * @since 1.0
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

  <div id="wrapper">

  <?php videoly_loader(); ?>
  
  <?php videoly_sideheader(); ?>
  <?php videoly_search_popup(); ?>
  <?php videoly_popup(); ?>

  <div id="content-wrapper">
  <?php videoly_header_template(videoly_get_opt('header-template')); ?>
  <?php get_template_part('templates/title-wrapper/default'); ?>
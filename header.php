<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>Take Out</strong> CLT</a></h1> 
      <!-- <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span> -->
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul class="min-list group">
            <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 11) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
            <li <?php if (get_post_type() == 'restaurant') echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('restaurant') ?>">Restaurants</a></li>
            <li <?php if (get_post_type() == 'neighborhood') echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('neighborhood');?>">Neighborhoods</a></li>
            <li <?php if (get_post_type() == 'cuisine') echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('cuisine');?>">Cuisines</a></li>
            <li <?php if ( is_page('map') ) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/map'); ?>">Map</a></li>
            <li <?php if ( is_page('contact') ) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
          </ul>
        </nav>
        
      </div>
    </div>
  </header>

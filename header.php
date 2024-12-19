<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Pomelia Hotel">
  <meta property="og:image" content="/assets/img/home-thumbnail.png">
  <meta name="description" content="An hypotehical hotel in Ragusa.">
  <meta name="robots" content="index, follow">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="navbar">
      <span class="hamburger-icon primary-color">
        <i class="bi bi-list"></i>
      </span>
      <div class="logo-container">
        <a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri() . '/assets/img/logo.png'; ?>" alt="Logo" class="logo"></a>
      </div>
      <nav class="nav-container">
        <span class="close-icon">
          <i class="bi bi-x close"></i>
        </span>
        <?php wp_nav_menu(array(
          'menu' => 'Navbar',
          'menu_class' => 'navbar-menu'
        )); ?>
      </nav>
    </div>
  </header>
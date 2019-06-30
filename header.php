<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <!-- link CSS file -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  <?php wp_head(); ?>
</head>

<body>

  <header>
    <a href="<?php echo bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a>
  </header>

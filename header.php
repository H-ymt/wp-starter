<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<header class="header">
  <div class="header__inner">
    <a href="<?php echo home_url(); ?>" class="header__logo">Logo</a>
    <?php get_template_part('include/global-menu'); ?>
  </div>
</header>

<body>
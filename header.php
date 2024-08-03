<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style" fetchpriority="high" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap">
  <?php wp_head(); ?>
</head>

<header class="header">
  <div class="header__inner">
    <div class="logo">Logo</div>
    <?php get_template_part('include/global-menu'); ?>
  </div>
</header>

<body>
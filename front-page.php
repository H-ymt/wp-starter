<?php get_header(); ?>
<div class="container">
  <div class="fv">
    <h1 class="fvTitle">WordPress Starter template with Vite</h1>
    <p class="fvBody">ViteでWordPressサイトを構築するテンプレート</p>
    <div class="fvButton">
      <a class="buttonPrimary" href="<?php echo get_home_template('/sample') ?>">Sample page</a>
    </div>
  </div>

  <section class="feature">
    <h2>Feature</h2>
    <ul class="featureList">
      <li>Vite</li>
      <li>Hot Module Replacement</li>
      <li>Sass</li>
    </ul>
  </section>
</div>
<?php get_footer(); ?>
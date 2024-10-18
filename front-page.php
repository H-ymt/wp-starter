<?php get_header(); ?>
<div class="container">
  <div class="hero">
    <h1 class="hero__Title">WordPress Starter template with Vite</h1>
    <p class="hero__body">ViteでWordPressサイトを構築するテンプレート</p>
    <div class="hero__button">
      <a href="<?php echo home_url('/sample'); ?>" class="button button--primary button--lg">Smaple Page</a>
    </div>
  </div>

  <div class="home_contentsWrapper">
    <section class="feature container">
      <h2 class="sectionTitle">Feature</h2>
      <ul class="featureList">
        <li class="featureList__item">
          Vite
          <ul>
            <li>開発ビルドツールとしてViteを使用し、ビルドの高速化やホットリロードの機能を活用しています。</li>
          </ul>
        </li>
        <li class="featureList__item">
          Hot Module Replacement
          <ul>
            <li>vite-plugin-live-reloadを使って、PHPファイルが変更された際に自動でブラウザをリロードする設定になっています。</li>
          </ul>
        </li>
        <li class="featureList__item">
          Sass
          <ul>
            <li>postcss-nestingでCSSのネスティングをサポートし、autoprefixerを使ってブラウザ互換性を確保しています。</li>
          </ul>
        </li>
      </ul>
    </section>

    <section class="components container">
      <h2 class="sectionTitle">Components</h2>
      <div class="components__container">
        <a href="<?php echo home_url('/sample'); ?>" class="button button--primary button--lg">Large Button</a>
        <a href="<?php echo home_url('/sample'); ?>" class="button button--primary button--sm">Small Button</a>
        <a href="<?php echo home_url('/sample'); ?>" class="button button--secondary button--sm">Secondary Button</a>
      </div>
    </section>
  </div>
</div>
<?php get_footer(); ?>
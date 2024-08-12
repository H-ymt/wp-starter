<?php get_header(); ?>
<div class="home__container">
  <div class="fv">
    <h1 class="fvTitle">WordPress Starter template with Vite</h1>
    <p class="fvBody">ViteでWordPressサイトを構築するテンプレート</p>
    <div class="fvButton">
      <a href="<?php echo home_url('/sample'); ?>" class="button buttonPrimary buttonPrimary--lg">Smaple Page</a>
    </div>
  </div>

  <div class="home_contentsWrapper">
    <section class="feature container">
      <h2 class="home__sectionTitle">Feature</h2>
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
      <h2 class="home__sectionTitle">Components</h2>
      <div class="components__container">
        <a href="<?php echo home_url('/sample'); ?>" class="button buttonPrimary buttonPrimary--lg">Large Button</a>
        <a href="<?php echo home_url('/sample'); ?>" class="button buttonPrimary buttonPrimary--sm">Small Button</a>
        <a href="<?php echo home_url('/sample'); ?>" class="button buttonSecondary">Secondary Button</a>
      </div>
    </section>
  </div>
</div>
<?php get_footer(); ?>
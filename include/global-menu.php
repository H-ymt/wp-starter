<?php
$current_url = home_url(add_query_arg(null, null));
$nav_list = [
  [
    'label' => 'Home',
    'url' => home_url('/')
  ],
  [
    'label' => 'Sample',
    'url' => home_url('/sample')
  ],
  [
    'label' => 'Menu',
    'url' => home_url("/sample2")
  ],
  [
    'label' => 'Menu',
    'url' => home_url('/sample3')
  ],
]
?>

<nav aria-label="グローバルメニュー" class="globalMenu">
  <?php foreach ($nav_list as $nav) : ?>
    <a class="globalMenu__link <?php if (rtrim($current_url, '/') === rtrim($nav['url'], '/')) : ?>is-active<?php endif; ?>" href="<?php echo $nav['url']; ?>">
      <?php echo $nav['label']; ?>
    </a>
  <?php endforeach; ?>
</nav>

<nav id="global-menu" aria-hidden="true" aria-label="グローバルメニュー" class="globalMenuMobile js-globalMenu">
  <div class="globalMenuMobile__inner">
    <?php foreach ($nav_list as $nav) : ?>
      <a class="globalMenuMobile__link <?php if (rtrim($current_url, '/') === rtrim($nav['url'], '/')) : ?>is-active<?php endif; ?>" href="<?php echo $nav['url']; ?>">
        <?php echo $nav['label']; ?>
      </a>
    <?php endforeach; ?>
  </div>
</nav>
<button
  type="button"
  class="globalMenuMobile__button js-globalMenuButton"
  aria-controls="global-menu"
  aria-expanded=false
  aria-label="メニューを開く">
  <span></span>
  <span></span>
  <span></span>
</button>
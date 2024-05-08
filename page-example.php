<?php
/*
Template Name:事例
*/
get_header();
?>
<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">導入事例</h1>
  </section>

  <!-- パンクズリスト追加する -->
  <div class="breadcrumb">
    <?php
    if (function_exists('bcn_display')) {
      bcn_display();
    }
    ?>
  </div>
  <!-- サイドバー追加する -->

  <div class="page-pc-wrap">
    <div class="sidebar-wrap">
      <div class="sidebar">
        <div class="sidebar-contents">
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/example/example-1/')); ?>">狭小地のポート化（マンション・軒先等）</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/example/example-2/')); ?>">官民連携</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/example/example-3/')); ?>">観光利用・フェリー連携</div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/example/example-4/')); ?>">複数事業者混在事例</a></div>
        </div>
      </div>
    </div>
    <div class="section-wrap">
      <section class="first">
        <a href="<?php echo esc_url(home_url('/home/example/example-1/')); ?>" class="first-link">
          <h2 class="first-title first-link">狭小地のポート化（マンション・軒先等）</h2>
        </a>
        <a href="<?php echo esc_url(home_url('/home/example/example-2/')); ?>" class="first-link">
          <h2 class="first-title first-link">官民連携</h2>
        </a>
        <a href="<?php echo esc_url(home_url('/home/example/example-3/')); ?>" class="first-link">
          <h2 class="first-title first-link">観光利用・フェリー連携</h2>
        </a>
        <a href="<?php echo esc_url(home_url('/home/example/example-4/')); ?>" class="first-link">
          <h2 class="first-title first-link">複数事業者混在事例</h2>
        </a>
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>
<?php
/*
Template Name:coming-soon
*/
get_header();
?>
<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">Coming soon</h1>
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
          <div class="sidebar-contents-items sidebar-coming-soon">Coming soon</div>
        </div>
      </div>
    </div>
    <div class="section-wrap">
      <section class="first">
        <h2 class="first-title">Coming soon</h2>
        <div class="coming-soon-page">Topページは<a href="<?php echo esc_url(home_url('/')); ?>">こちら</a></div>
      </section>
    </div>
  </div>
</main>


<?php get_footer(); ?>
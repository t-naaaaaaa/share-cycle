<?php
/*
Template Name:会員募集フォーム
*/
get_header();
?>

<!-- パンクズリスト追加する -->
<div class="breadcrumb">
  <?php
  if (function_exists('bcn_display')) {
    bcn_display();
  }
  ?>
</div>
<!-- 問い合わせフォーム -->
<div class="">
  <section class="member-form-main">
    <div class="member-form-wrap1">
      <div class="member-form-ttl">新規会員登録</div>
      <div class="member-form-txt">会員になると、マイページから購入履歴の確認、無料テーマが使えるようになります。</div>
    </div>
    <div class="member-form">
      <div class="member-form-wrap2">
        <div class="member-form-input">お客様情報</div>
        <div class="member-form-input-main">
          <?php echo do_shortcode('[contact-form-7 id="3e7d492" title="Member_registration"]'); ?>
        </div>
        <div class="member-form-login"><a href="">ログインはこちら</a></div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
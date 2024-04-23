<?php
/*
Template Name: お問い合わせ
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
      <div class="member-form-ttl">お問い合わせ</div>
      <div class="member-form-txt">下記のフォームに必要事項を記入ください。</div>
    </div>
    <div class="member-form">
      <div class="member-form-wrap2">
        <div class="member-form-input">お客様情報</div>
        <div class="member-form-input-main">
          <?php echo do_shortcode('[contact-form-7 id="80c10fb" title="contact"]'); ?>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
<?php
/*
Template Name: ログイン
*/
get_header();
?>
<section class="login">
    <div class="login-wrap">
        <?php
        echo do_shortcode('[wpmem_form login redirect_to="https://gia-jsca.net/home/only-member-page/"]');
        ?>
    </div>
</section>
<?php get_footer(); ?>
